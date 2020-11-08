create database libreria;
use libreria;

create table cliente
(
cuenta varchar(8) primary key,
contraseña varchar(20),
apellidos varchar(30),
nombres varchar(30),
direccion varchar(80),
localidad varchar(30),
cpostal varchar(5),
telefono varchar(9),
correo varchar(30)
 
);


create table tarjeta
(
tipotarjeta varchar(10),
nrotarjeta varchar(16),
fechalimite varchar(5),
codigo varchar(3),
cuenta varchar(8)
 
);

 
alter table tarjeta 
add foreign key (cuenta)
references cliente(cuenta);

create table libro
(
codLibro varchar(10) primary key,
nombre varchar(50),
resumen varchar(500),
ISBN  varchar(13),
precio decimal,
img varchar(50),
stock  int,
CodAutor varchar(10)
);
 
create table autor
(
CodAutor varchar(10) primary key,
nombreAutor varchar(50),
nacionalidad varchar(20)
 
);

alter table libro 
add foreign key (CodAutor)
references autor(CodAutor);

---------------------------------------------------------------------------------------
--registro
insert into autor(codAutor,nombreAutor,nacionalidad) values ('A001','William Golding', 'Britanico');
insert into autor (codAutor,nombreAutor,nacionalidad) values ('A002','Anand Dilvar', 'Mexicano');
insert into autor (codAutor,nombreAutor,nacionalidad) values ('A003','J.R.R.Tolkien', 'Britanico');
insert into autor (codAutor,nombreAutor,nacionalidad) values ('A004','Miguel de Cervantes Saavedra', 'Español');
insert into autor (codAutor,nombreAutor,nacionalidad) values ('A005','Maribel Martín  ', 'Española');
insert into autor (codAutor,nombreAutor,nacionalidad) values ('A006','J. K. Rowling', 'Britanica');
insert into autor (codAutor,nombreAutor,nacionalidad) values ('A007','J. K. Rowling', 'Britanico');
insert into autor (codAutor,nombreAutor,nacionalidad) values ('A008','Jane Austen', 'Britanica');
insert into autor (codAutor,nombreAutor,nacionalidad) values ('A009','William Shakespeare', 'Ingles');
insert into autor (codAutor,nombreAutor,nacionalidad) values ('A010','Ignacio Manuel Altamirano', 'Mexicano');

insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L001','El Señor de las Moscas','cuenta la historia de un grupo de chicos británicos cuyo avión ha chocado en una isla desierta en el Océano Pacífico. Sin adultos, los chicos tienen que cuidarse y organizarse. Los chicos tienen entre seis y doce años ', '9780863815805', 5.00,'L001.png',20,'A001');

insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L002',' El Esclavo','Un hombre despierta atrapado en un cuerpo en estado vegetativo, tras un terrible accidente que le ha dejado inmovilizado. Incomunicado, comienza una conversación interior que le llevará en un viaje de autorrealización que le provocará un nuevo conocimiento de su yo más profundo' , '9780862436803', 15.00,'L002.png', 15,'A002');
insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L003','El Señor de los Anillos ', 'Frodo Bolsón es un hobbit al que su tío Bilbo hace portador del poderoso Anillo Único, capaz de otorgar un poder ilimitado al que la posea, con la finalidad de destruirlo. ', '9780863569782', 45.00,'L003.png',25, 'A003');

insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L004','Don Quijote de la Mancha', 'El ingenioso hidalgo don Quijote de la Mancha narra las aventuras de Alonso Quijano, un hidalgo pobre que de tanto leer novelas de caballería acaba enloqueciendo y creyendo ser un caballero andante, nombrándose a sí mismo como don Quijote de la Mancha ', '9780862548742', 56.30,'L004.png', 18,'A004');

insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L005',' Entregame tu corazon ','William era el hombre perfecto, al menos lo era para su amiga y Kristine estaba convencida a hacer cualquier cosa con tal de que empiecen a salir pero ¿qué ocurriría si ella comienza a enamorarse de él, sa mujer estaba loca. De eso William estaba seguro pero, ¿por qué no podía quitársela de la cabeza? Él no creía en el amor, no quería enamorarse pero por mucho que lo intenta no puede quitarse esa oscura sensación, ese deseo irracional por ella y decide hacerle un trato ', '9780864514783', 8.00,'L005.png', 19,'A005');

insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L006','Harry Potter', 'El día de su cumpleaños, Harry Potter descubre que es hijo de dos conocidos hechiceros, de los que ha heredado poderes mágicos. Debe asistir a una famosa escuela de magia y hechicería, donde entabla una amistad con dos jóvenes que se convertirán en sus compañeros de aventura.', '9780861274956', 34.10,'L006.png',22,'A006');
insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L007','Harry Potter:Las Reliquias de la Muerte ','Harry, Ron y Hermione se marchan de Hogwarts para iniciar su misión más importante: tienen que destruir los horrocruxes, el secreto del poder y la inmortalidad de Voldemort, en los que el temido mago oscuro guarda los fragmentos de su alma.', '9780862542731', 93.00,'L007.png',30,'A007');

insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L008','Orgullo y Prejuicio','Se trata de una novela de desarrollo personal, una comedia romántica que esconde muchas reflexiones y refleja a la perfección la sociedad inglesa aristócrata rural de la época.', '9780861452638', 48.40 ,'L008.png',12,'A008');


insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L009','Romeo y Julienta',' Romeo y Julieta es una historia de amor entre dos jóvenes de 16 años. Son de familias enemigas en la ciudad de Verona. Pertenecen a las familias de los Capuletos y los Montescos, que son las más poderosas de la ciudad pero están enfrentadas entre sí. ', '9780867586849', 32.20,'L009.png', 22,'A009');

insert into libro(codLibro,nombre,resumen,ISBN,precio,img,stock,codAutor) values ('L010','Navidad en las Montañas','Navidad en las montañas narra la historia de un capitán que, luego de perderse en las montañas, siente nostalgia por su infancia en la provincia y por su vida en la ciudad; sin embargo, su criado conoce a un cura, quien les ofrece hospedaje en el pueblo donde vive.', '9780864253657', 83.30,'L010.png', 24,'A010');

Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('75207852','2018200', 'Adrianzen Espinoza', ' Jordan ', ' Av.Alfredo Mendiola 3567 ', ' San Martin de Porres ', '00051', '985067200', 'jordanadriazen@gmail.com');
Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('61367852','20015', ' Laguna Delgado', ' Jazmin ', ' Av.Carlos Izaguirre 3567 ', ' Los olivos ', '00051', '999504392', 'jazminlaguna@gmail.com');
Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('55402952','12345', ' Suarez Merino', ' Emanuel ', ' Av.Javier Prado este 1245 ', ' San Borja ', '00051', '928493331', 'salah@gmail.com');
Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('73908589','37789', ' Collasos Villanueva', ' Daniel ', ' Av.Alfredo Mendiola 1737 ', ' San Martin de Porres ', '00051', '962893921', 'danielcollazos@gmail.com');
Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('82723298','828763', ' Parraga Badillo', ' Saul ', ' Av San Juan De Dios, Puente Piedra 15121 ', ' Carabayllo ', '00051', '910074983', 'saulparraga@gmail.com');
Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('63050223','1002', 'Monzon Champi', 'Carlos', ' Av.Naranjal 245 ', ' Los Olivos', '00051', '929384053', 'monzonchampi@gmail.com');
Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('73010233','2093', 'Herrera Marca', 'Diego', ' Av.San Juan de Dios 3934', ' San Martin de Porres', '00051', '938485051', 'diegoherrera@gmail.com');
Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('72070443','1005', 'Palomino Perez', 'Jesus', ' Av.Angelica Gamarra  2467', ' Los olivos', '00051', '937485494', 'jesuspalomino@gmail.com');
Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('79310243','2048', 'Mendez Gonzalez', 'Carla', ' Av.Javier Este 245', ' San Borja', '00051', '985475443', 'carlamendez@gmail.com');
Insert into cliente(cuenta,contraseña,apellidos,nombres,direccion,localidad,cpostal,telefono,correo) values ('74361323','1034', 'Perez Alvarez', 'Carlos', ' Av.Jose Larco  2495', ' Miraflores', '00051', '934479543', 'carlosperez@gmail.com');


Insert into tarjeta(tipotarjeta,nrotarjeta,fechalimite,codigo,cuenta) values ('Visa','4674024847439432', '02/28', '463','75207852');
Insert into tarjeta(tipotarjeta,nrotarjeta,fechalimite,codigo,cuenta) values ('MasterCard','4332094399329324', '04/25', '509','61367852');
Insert into tarjeta(tipotarjeta,nrotarjeta,fechalimite,codigo,cuenta) values ('Visa','4345024847544342', '05/23', '445', '73908589');
Insert into tarjeta(tipotarjeta,nrotarjeta,fechalimite,codigo,cuenta) values ('MasterCard','4474024847448473', '05/24', '432','55402952');
Insert into tarjeta(tipotarjeta,nrotarjeta,fechalimite,codigo,cuenta) values ('MasterCard','4574024827281939', '10/23', '123','82723298');
Insert into tarjeta(tipotarjeta,nrotarjeta,fechalimite,codigo,cuenta) values ('Visa','4174034434745562', '11/29', '899','63050223');
Insert into tarjeta(tipotarjeta,nrotarjeta,fechalimite,codigo,cuenta) values ('MasterCard','4175024834743432', '07/23', '456','73010233');
Insert into tarjeta(tipotarjeta,nrotarjeta,fechalimite,codigo,cuenta) values ('Visa','3456045847539434', '01/25', '999','72070443');
Insert into tarjeta(tipotarjeta,nrotarjeta,fechalimite,codigo,cuenta) values ('Visa','6744232444773943', '01/27', '463', '79310243');
--procedure
use libreria;
DELIMITER @@
DROP PROCEDURE IF EXISTS SPlibro@@
CREATE PROCEDURE SPlibro (NOM  varchar(50),RES varchar(500),img varchar(50),ISBN varchar(13),
IN PRE DECIMAL,stock int,noma VARCHAR(50),naci varchar(20) )
BEGIN

declare codl varchar(10);
declare coda varchar(10);
declare noa int;
declare h char(10);
declare cod varchar(10);
select  CONCAT('L',lpad(ifnull(substr(max(codLibro),-3),0) + 1,3,'0')) into codl from libro ; 
select CONCAT('A',lpad(ifnull(substr(max(CodAutor),-3),0) + 1,3,'0')) into coda from autor;
select count(*) into noa  from autor where nombreAutor=noma;
select CONCAT('A',lpad(ifnull(substr(max(CodAutor),-3),0),3,'0')) into cod from autor;
if noa<>0 then

insert into libro values(codl,NOM,RES,ISBN,PRE,img,stock,cod);

else 
insert into autor values(coda,noma,naci);
insert into libro values(codl,NOM,RES,ISBN,PRE,img,stock,coda);

end if;
END@@