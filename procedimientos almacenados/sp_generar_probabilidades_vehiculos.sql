CREATE DEFINER=`laboratorios`@`%` PROCEDURE `crear_probabilidades_Vehiculos`()
BEGIN
	
	declare n_s, n_m,n_l, total_clases, m, nc_s, nc_m,nc_l, i, j, k int;
    declare promedio_mayor, promedio_menor, probabilidad_clase_s_general, probabilidad_clase_m_general,probabilidad_clase_l_general,probabilidad_clase_s_atributos, probabilidad_clase_m_atributos,probabilidad_clase_l_atributos, p double;
	declare recinto_,estilo_ varchar(20);

	
	set total_clases = (select count(*) from vehiculo);
    set n_s = (select count(*) from vehiculo where clase = 's');
	set n_m = (select count(*) from vehiculo where clase = 'm');
    set n_l = (select count(*) from vehiculo where clase = 'l');
	
    set m = 3;
	
	set i = 0;
    set j = 0;
    set k = 0;
    
	
    set probabilidad_clase_s_general = (n_s / total_clases);
    set probabilidad_clase_m_general = (n_m / total_clases);
	set probabilidad_clase_l_general = (n_l / total_clases);
	
    create table probabilidades_vehiculos_clases(
		id int primary key auto_increment not null,
		probabilidad_clase_s double not null,
		probabilidad_clase_m double not null,
		probabilidad_clase_l double not null
	);

	
	create table prob_clase_vehiculos_atributos(
		id int primary key auto_increment not null,
		atributo varchar(35) not null,
		opcion_atributo varchar(25) not null,
		probabilidad_clase_s double not null,
		probabilidad_clase_m double not null,
		probabilidad_clase_l double not null
	);
    
    insert into probabilidades_vehiculos_clases (probabilidad_clase_s, probabilidad_clase_m,probabilidad_clase_l) values (probabilidad_clase_s_general, probabilidad_clase_m_general,probabilidad_clase_l_general);

	
	set promedio_menor = 0.0;
	set promedio_mayor = 250.0;
    while k<4 do
		
	
		set nc_s = (select count(*) from vehiculo where clase ='s' and 	precio <= promedio_mayor and precio > promedio_menor);
		set nc_m = (select count(*) from vehiculo where clase = 'm' and precio <= promedio_mayor and precio > promedio_menor);
		set nc_l = (select count(*) from vehiculo where clase = 'l' and precio <= promedio_mayor and precio > promedio_menor);

		set p = 1/4;
		

        set probabilidad_clase_s_atributos = ((nc_s+(m*p))/(n_s+m));
        set probabilidad_clase_m_atributos = ((nc_m+(m*p))/(n_m+m));
		set probabilidad_clase_l_atributos = ((nc_l+(m*p))/(n_m+m));
		
		
		insert into prob_clase_vehiculos_atributos (atributo, opcion_atributo, probabilidad_clase_s, probabilidad_clase_m, probabilidad_clase_l) values ('precio', promedio_mayor, probabilidad_clase_s_atributos, probabilidad_clase_m_atributos, probabilidad_clase_l_atributos);
		set k=k+1;
		
		
		set promedio_menor=promedio_mayor;
		set promedio_mayor=promedio_mayor+250;
		
	end while;
    set k=0;
    
    set promedio_menor = 0.0;
	set promedio_mayor = 4;
    while k<4 do
		
	
		set nc_s = (select count(*) from vehiculo where clase ='s' and pasajeros <= promedio_mayor and pasajeros > promedio_menor);
		set nc_m = (select count(*) from vehiculo where clase = 'm' and pasajeros <= promedio_mayor and pasajeros > promedio_menor);
		set nc_l = (select count(*) from vehiculo where clase = 'l' and pasajeros <= promedio_mayor and pasajeros > promedio_menor);

		set p = 1/4;
		

        set probabilidad_clase_s_atributos = ((nc_s+(m*p))/(n_s+m));
        set probabilidad_clase_m_atributos = ((nc_m+(m*p))/(n_m+m));
		set probabilidad_clase_l_atributos = ((nc_l+(m*p))/(n_m+m));
		
		
		insert into prob_clase_vehiculos_atributos (atributo, opcion_atributo, probabilidad_clase_s, probabilidad_clase_m, probabilidad_clase_l) values ('pasajeros', promedio_mayor, probabilidad_clase_s_atributos, probabilidad_clase_m_atributos, probabilidad_clase_l_atributos);
		set k=k+1;
		
		
		set promedio_menor=promedio_mayor;
		set promedio_mayor=promedio_mayor+4;
		
	end while;
	set k=0;
     
    set promedio_menor = 0.0;
	set promedio_mayor = 2;
    while k<15 do
		
	
		set nc_s = (select count(*) from vehiculo where clase ='s' and tiempo <= promedio_mayor and tiempo > promedio_menor);
		set nc_m = (select count(*) from vehiculo where clase = 'm' and tiempo <= promedio_mayor and tiempo > promedio_menor);
		set nc_l = (select count(*) from vehiculo where clase = 'l' and tiempo <= promedio_mayor and tiempo > promedio_menor);

		set p = 1/15;
		

        set probabilidad_clase_s_atributos = ((nc_s+(m*p))/(n_s+m));
        set probabilidad_clase_m_atributos = ((nc_m+(m*p))/(n_m+m));
		set probabilidad_clase_l_atributos = ((nc_l+(m*p))/(n_m+m));
		
		
		insert into prob_clase_vehiculos_atributos (atributo, opcion_atributo, probabilidad_clase_s, probabilidad_clase_m, probabilidad_clase_l) values ('tiempo', promedio_mayor, probabilidad_clase_s_atributos, probabilidad_clase_m_atributos, probabilidad_clase_l_atributos);
		set k=k+1;
		
		
		set promedio_menor=promedio_mayor;
		set promedio_mayor=promedio_mayor+2;
		
	end while;
	set k=0;
	
END