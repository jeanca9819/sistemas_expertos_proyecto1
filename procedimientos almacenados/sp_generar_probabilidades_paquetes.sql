CREATE DEFINER=`laboratorios`@`%` PROCEDURE `crear_probabilidades_paquetes`()
BEGIN
	
	declare n_basico, n_intermedio, n_premium, total_clases, m, nc_basico, nc_intermedio, nc_premium, i, j, k, l, o, precio_ int;
    declare promedio_mayor, promedio_menor, probabilidad_clase_basico_general, probabilidad_clase_intermedio_general, probabilidad_clase_premium_general,probabilidad_clase_basico_atributos, probabilidad_clase_intermedio_atributos, probabilidad_clase_premium_atributos, p double;
	declare tipo_, cercania_, alimentacion_, transporte_ varchar(20);

	
	set total_clases = (select count(*) from paquete);
    set n_basico = (select count(*) from paquete where clase = 'Basico');
	set n_intermedio = (select count(*) from paquete where clase = 'Intermedio');
    set n_premium = (select count(*) from paquete where clase = 'Premium');
	
    set m = 5;
	
	set i = 0;
    set j = 0;
    set k = 0;
    set l = 0;
    set o = 0;
    
	
    set probabilidad_clase_basico_general = (n_basico / total_clases);
    set probabilidad_clase_intermedio_general = (n_intermedio / total_clases);
	set probabilidad_clase_premium_general = (n_premium / total_clases);
	
    create table probabilidades_paquetes_clases(
		id int primary key auto_increment not null,
		probabilidad_clase_basico double not null,
		probabilidad_clase_intermedio double not null,
		probabilidad_clase_premium double not null
	);

	
	create table probabilidades_paquetes_atributos(
		id int primary key auto_increment not null,
		atributo varchar(35) not null,
		opcion_atributo varchar(25) not null,
		probabilidad_clase_basico double not null,
		probabilidad_clase_intermedio double not null,
		probabilidad_clase_premium double not null
	);
    
    insert into probabilidades_paquetes_clases (probabilidad_clase_basico, probabilidad_clase_intermedio, probabilidad_clase_premium) values (probabilidad_clase_basico_general, probabilidad_clase_intermedio_general, probabilidad_clase_premium_general);

	
	while i<5 do
		CASE i
				WHEN 0 THEN
				   set tipo_ = 'Aventura';
				WHEN 1 THEN
				   set tipo_ = 'Urbano';
				WHEN 2 THEN
				   set tipo_ = 'Natural';
				WHEN 3 THEN
				   set tipo_ = 'Compras';
				ELSE
				   set tipo_ = 'Gastronomico';
			END CASE;
	
		set nc_basico = (select count(*) from paquete where clase = 'Basico' and tipo_paquete = tipo_);
		set nc_intermedio = (select count(*) from paquete where clase = 'Intermedio' and tipo_paquete = tipo_);
		set nc_premium = (select count(*) from paquete where clase = 'Premium' and tipo_paquete = tipo_);

		set p = 1/5;
		
        set probabilidad_clase_basico_atributos = ((nc_basico+(m*p))/(n_basico+m));
        set probabilidad_clase_intermedio_atributos = ((nc_intermedio+(m*p))/(n_intermedio+m));
		set probabilidad_clase_premium_atributos = ((nc_premium+(m*p))/(n_premium+m));
		
		insert into probabilidades_paquetes_atributos (atributo, opcion_atributo, probabilidad_clase_basico, probabilidad_clase_intermedio, probabilidad_clase_premium) values ('tipo', tipo_, probabilidad_clase_basico_atributos, probabilidad_clase_intermedio_atributos, probabilidad_clase_premium_atributos);
		set i=i+1;
	end while;
    
    while j<3 do
		CASE j
				WHEN 0 THEN
				   set precio_ = 250000;
				WHEN 1 THEN
				   set precio_ = 100000;
				ELSE
				   set precio_ = 50000;
			END CASE;
	
		set nc_basico = (select count(*) from paquete where clase = 'Basico' and precio = precio_);
		set nc_intermedio = (select count(*) from paquete where clase = 'Intermedio' and precio = precio_);
		set nc_premium = (select count(*) from paquete where clase = 'Premium' and precio = precio_);

		set p = 1/3;
		
        set probabilidad_clase_basico_atributos = ((nc_basico+(m*p))/(n_basico+m));
        set probabilidad_clase_intermedio_atributos = ((nc_intermedio+(m*p))/(n_intermedio+m));
		set probabilidad_clase_premium_atributos = ((nc_premium+(m*p))/(n_premium+m));
		
		insert into probabilidades_paquetes_atributos (atributo, opcion_atributo, probabilidad_clase_basico, probabilidad_clase_intermedio, probabilidad_clase_premium) values ('precio', precio_, probabilidad_clase_basico_atributos, probabilidad_clase_intermedio_atributos, probabilidad_clase_premium_atributos);
		set j=j+1;
	end while;

	while k<3 do
		CASE k
				WHEN 0 THEN
				   set cercania_ = '-25';
				WHEN 1 THEN
				   set cercania_ = '25-100';
				ELSE
				   set cercania_ = '+100';
			END CASE;
	
		set nc_basico = (select count(*) from paquete where clase = 'Basico' and cercania = cercania_);
		set nc_intermedio = (select count(*) from paquete where clase = 'Intermedio' and cercania = cercania_);
		set nc_premium = (select count(*) from paquete where clase = 'Premium' and cercania = cercania_);

		set p = 1/3;
		
        set probabilidad_clase_basico_atributos = ((nc_basico+(m*p))/(n_basico+m));
        set probabilidad_clase_intermedio_atributos = ((nc_intermedio+(m*p))/(n_intermedio+m));
		set probabilidad_clase_premium_atributos = ((nc_premium+(m*p))/(n_premium+m));
		
		insert into probabilidades_paquetes_atributos (atributo, opcion_atributo, probabilidad_clase_basico, probabilidad_clase_intermedio, probabilidad_clase_premium) values ('cercania', cercania_, probabilidad_clase_basico_atributos, probabilidad_clase_intermedio_atributos, probabilidad_clase_premium_atributos);
		set k=k+1;
	end while;
    
    	while l<2 do
		CASE l
				WHEN 0 THEN
				   set alimentacion_ = 'SI';
				ELSE
				   set alimentacion_ = 'NO';
			END CASE;
	
		set nc_basico = (select count(*) from paquete where clase = 'Basico' and alimentacion = alimentacion_);
		set nc_intermedio = (select count(*) from paquete where clase = 'Intermedio' and alimentacion = alimentacion_);
		set nc_premium = (select count(*) from paquete where clase = 'Premium' and alimentacion = alimentacion_);

		set p = 1/2;
		
        set probabilidad_clase_basico_atributos = ((nc_basico+(m*p))/(n_basico+m));
        set probabilidad_clase_intermedio_atributos = ((nc_intermedio+(m*p))/(n_intermedio+m));
		set probabilidad_clase_premium_atributos = ((nc_premium+(m*p))/(n_premium+m));
		
		insert into probabilidades_paquetes_atributos (atributo, opcion_atributo, probabilidad_clase_basico, probabilidad_clase_intermedio, probabilidad_clase_premium) values ('alimentacion', alimentacion_, probabilidad_clase_basico_atributos, probabilidad_clase_intermedio_atributos, probabilidad_clase_premium_atributos);
		set l=l+1;
	end while;
    
    while o<2 do
		CASE o
				WHEN 0 THEN
				   set transporte_ = 'SI';
				ELSE
				   set transporte_ = 'NO';
			END CASE;
	
		set nc_basico = (select count(*) from paquete where clase = 'Basico' and transporte = transporte_);
		set nc_intermedio = (select count(*) from paquete where clase = 'Intermedio' and transporte = transporte_);
		set nc_premium = (select count(*) from paquete where clase = 'Premium' and transporte = transporte_);

		set p = 1/2;
		
        set probabilidad_clase_basico_atributos = ((nc_basico+(m*p))/(n_basico+m));
        set probabilidad_clase_intermedio_atributos = ((nc_intermedio+(m*p))/(n_intermedio+m));
		set probabilidad_clase_premium_atributos = ((nc_premium+(m*p))/(n_premium+m));
		
		insert into probabilidades_paquetes_atributos (atributo, opcion_atributo, probabilidad_clase_basico, probabilidad_clase_intermedio, probabilidad_clase_premium) values ('transporte', transporte_, probabilidad_clase_basico_atributos, probabilidad_clase_intermedio_atributos, probabilidad_clase_premium_atributos);
		set o=o+1;
	end while;
END