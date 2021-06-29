CREATE DEFINER=`laboratorios`@`%` PROCEDURE `determinar_probabilidades_paquete`(IN tipo_parametro VARCHAR(20), IN precio_parametro VARCHAR(20), IN cercania_parametro VARCHAR(100), IN alimentacion_parametro VARCHAR(100), IN transporte_parametro VARCHAR(100))
BEGIN

    declare probabilidad_clase_basico_general, probabilidad_clase_intermedio_general, probabilidad_clase_premium_general, basico, intermedio, premium double;
    declare i int;
    declare clase_definida varchar(20);
    
    set i = 0;
	
    set probabilidad_clase_basico_general = (select probabilidad_clase_basico from probabilidades_paquetes_clases);
    set probabilidad_clase_intermedio_general = (select probabilidad_clase_intermedio from probabilidades_paquetes_clases);
    set probabilidad_clase_premium_general = (select probabilidad_clase_premium from probabilidades_paquetes_clases);

	set basico = 
	(select probabilidad_clase_basico from probabilidades_paquetes_atributos where atributo = 'tipo' and opcion_atributo = tipo_parametro)*
	(select probabilidad_clase_basico from probabilidades_paquetes_atributos where atributo = 'precio' and opcion_atributo = precio_parametro)*
	(select probabilidad_clase_basico from probabilidades_paquetes_atributos where atributo = 'cercania' and opcion_atributo = cercania_parametro)*
    (select probabilidad_clase_basico from probabilidades_paquetes_atributos where atributo = 'alimentacion' and opcion_atributo = alimentacion_parametro)*
    (select probabilidad_clase_basico from probabilidades_paquetes_atributos where atributo = 'transporte' and opcion_atributo = transporte_parametro)*
	probabilidad_clase_basico_general;
    
    set intermedio = 
	(select probabilidad_clase_intermedio from probabilidades_paquetes_atributos where atributo = 'tipo' and opcion_atributo = tipo_parametro)*
	(select probabilidad_clase_intermedio from probabilidades_paquetes_atributos where atributo = 'precio' and opcion_atributo = precio_parametro)*
	(select probabilidad_clase_intermedio from probabilidades_paquetes_atributos where atributo = 'cercania' and opcion_atributo = cercania_parametro)*
    (select probabilidad_clase_intermedio from probabilidades_paquetes_atributos where atributo = 'alimentacion' and opcion_atributo = alimentacion_parametro)*
    (select probabilidad_clase_intermedio from probabilidades_paquetes_atributos where atributo = 'transporte' and opcion_atributo = transporte_parametro)*
	probabilidad_clase_intermedio_general;
	
	set premium = 
	(select probabilidad_clase_premium from probabilidades_paquetes_atributos where atributo = 'tipo' and opcion_atributo = tipo_parametro)*
	(select probabilidad_clase_premium from probabilidades_paquetes_atributos where atributo = 'precio' and opcion_atributo = precio_parametro)*
	(select probabilidad_clase_premium from probabilidades_paquetes_atributos where atributo = 'cercania' and opcion_atributo = cercania_parametro)*
    (select probabilidad_clase_premium from probabilidades_paquetes_atributos where atributo = 'alimentacion' and opcion_atributo = alimentacion_parametro)*
    (select probabilidad_clase_premium from probabilidades_paquetes_atributos where atributo = 'transporte' and opcion_atributo = transporte_parametro)*
	probabilidad_clase_premium_general;
    
    while i<3 do
		CASE i
			WHEN 0 THEN
               if (basico > intermedio and basico > premium) then
					set clase_definida = 'Basico';
               end if;
			WHEN 1 THEN
				if (intermedio > basico and intermedio > premium) then
					set clase_definida = 'Intermedio';
               end if;
			ELSE
				if (premium > basico and premium > intermedio) then
					set clase_definida = 'Premium';
               end if;
		END CASE;
		set i=i+1;
	end while;
    
    select id_paquete, precio, alimentacion, transporte, imagen, video, mapa, descripcion from paquete where clase = clase_definida order by rand() limit 0,5;
    
END