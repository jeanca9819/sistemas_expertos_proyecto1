CREATE DEFINER=`laboratorios`@`%` PROCEDURE `determinar_probabilidades_vehiculo`(IN precio_parametro double, IN tiempo_parametro INT(11), IN pasajeros_parametro INT(45))
BEGIN

    declare probabilidad_clase_s_general, probabilidad_clase_m_general, probabilidad_clase_l_general, s, m, l double;
    declare i int;
    declare clase_definida varchar(20);
    
    set i = 0;
	
    set probabilidad_clase_s_general = (select probabilidad_clase_s from probabilidades_vehiculos_clases);
    set probabilidad_clase_m_general = (select probabilidad_clase_m from probabilidades_vehiculos_clases);
    set probabilidad_clase_l_general = (select probabilidad_clase_l from probabilidades_vehiculos_clases);

	set s = 
	(select probabilidad_clase_s from prob_clase_vehiculos_atributos where atributo = 'precio' and opcion_atributo = precio_parametro)*
	(select probabilidad_clase_s from prob_clase_vehiculos_atributos where atributo = 'pasajeros' and opcion_atributo = pasajeros_parametro)*
	(select probabilidad_clase_s from prob_clase_vehiculos_atributos where atributo = 'tiempo' and opcion_atributo = tiempo_parametro)*
	probabilidad_clase_s_general;
    
    set m = 
	(select probabilidad_clase_m from prob_clase_vehiculos_atributos where atributo = 'precio' and opcion_atributo = precio_parametro)*
	(select probabilidad_clase_m from prob_clase_vehiculos_atributos where atributo = 'pasajeros' and opcion_atributo = pasajeros_parametro)*
	(select probabilidad_clase_m from prob_clase_vehiculos_atributos where atributo = 'tiempo' and opcion_atributo = tiempo_parametro)*
	probabilidad_clase_m_general;
    
    set l = 
	(select probabilidad_clase_l from prob_clase_vehiculos_atributos where atributo = 'precio' and opcion_atributo = precio_parametro)*
	(select probabilidad_clase_l from prob_clase_vehiculos_atributos where atributo = 'pasajeros' and opcion_atributo = pasajeros_parametro)*
	(select probabilidad_clase_l from prob_clase_vehiculos_atributos where atributo = 'tiempo' and opcion_atributo = tiempo_parametro)*
	probabilidad_clase_l_general;
    
    while i<3 do
		CASE i
			WHEN 0 THEN
               if (s > m and s > l) then
					set clase_definida = 'S';
               end if;
			WHEN 1 THEN
				if (m > s and m > l) then
					set clase_definida = 'M';
               end if;
			ELSE
				if (l > s and l > m) then
					set clase_definida = 'L';
               end if;
		END CASE;
		set i=i+1;
	end while;
    
    select id_vehiculo, precio, pasajeros, tiempo, imagen, video, mapa, descripcion from vehiculo where clase = clase_definida order by rand() limit 0,5;
    
END