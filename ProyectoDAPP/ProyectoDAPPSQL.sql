create database ProyectoDAPP;
use ProyectoDAPP;

create table Producto (idProducto int, NomProducto varchar(45), Descripcion varchar(45),
primary key(idProducto));
insert into producto value (1,'Crisplus', 'controlar la obesidad');
insert into producto value (2,'Xenical', 'para tratar el sobrepeso');
insert into producto value (3,'Alli', 'para adelgazar');
insert into producto value (4,'Adipex', 'para suprimir el apetito');
insert into producto value (5,'Didrex', 'para el sobrepeso y la obesidad');
insert into producto value (6,'Plumas', 'caja 15');
insert into producto value (7,'Hojas', 'paquete de 100');
insert into producto value (8,'Lapiz', 'caja con 20');
insert into producto value (9,'Sillas', null);
insert into producto value (10,'Equipos de Computo', null);


create table InventarioInterno(Fila int, NomProducto varchar(45), Cantidad int, PrecioCompra int, PrecioVencta int,
primary key(Fila));
insert into InventarioInterno value (1, 'Crisplus', 30,30, 120);
insert into InventarioInterno value (2, 'Xenical', 20,100, 150);
insert into InventarioInterno value (3, 'Alli', 100,80, 135);
insert into InventarioInterno value (4, 'Adipex', 50,60, 90);
insert into InventarioInterno value (5, 'Didrex', 20,350, 500);
insert into InventarioInterno value (6, 'Plumas', 10,120, null);
insert into InventarioInterno value (7, 'Hojas', 10,60, null);
insert into InventarioInterno value (8, 'Lapiz', 5,30, null);
insert into InventarioInterno value (9, 'Sillas', 20,1200, null);
insert into InventarioInterno value (10, 'Equipos de Computo', 4,5000, null);


