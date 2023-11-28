create table Cliente(
id_cliente char (5) not null,
nombre_C varchar (30) not null,
apellidos_C varchar (60) not null,
correo_C varchar (40) not null,
contra_C varchar (20) not null,
edad_C int not null,
sexo_C char (1) not null,
pais_C varchar (30) not null,
estado_C varchar (20) not null, 
calle_C varchar (40) not null,
colonia_C varchar (40) not null,
numCasa_C int not null, 
CP_C int not null,
telefono_C varchar (10) not null
);

alter table Cliente add constraint pk_Cliente primary key (id_cliente);

create table Comentario(
id_comentario char(5) not null,
id_clienteCom char (5) not null, 
fecha_Com varchar(10) not null,
contenido_Com varchar(300) not null
);

alter table Comentario add constraint pk_Comentario primary key (id_comentario);
alter table Comentario add constraint fk_ComenCli foreign key (id_clienteCom) references Cliente (id_cliente);

create table Modelo(
id_modelo char (5) not null,
nombre_M varchar (50) not null,
precioMay_M int not null,
precioMen_M int not null,
existencia_M int not null,
categoria_M varchar (50) not null
);

alter table Modelo add constraint pk_Modelo primary key (id_modelo);

create table Pedido(
id_pedido char (5) not null,
id_clienteP char (5) not null,
id_modeloP char(5) not null, 
fecha_P varchar (10) not null,
cantidadPro_P int not null,
total int not null,
alcance_P varchar (40) not null
);

alter table Pedido add constraint pk_Pedido primary key (id_pedido);
alter table Pedido add constraint fk_PedClien foreign key (id_clienteP) references Cliente (id_cliente);
alter table Pedido add constraint fk_PedModel foreign key (id_modeloP) references Modelo (id_modelo);

Insert into Cliente values 
('10000', 'Mauricio', 'Cervantes Carranco', 'MCervantes@gmail.com', '123456789', 21, 'H', 'México', 'Guanajuato', 
'Principal', 'San Isidro', 5, 37570, '4771234567'), 
('10001', 'Axel Ricardo', 'Coronado Sánchez', 'ACoronado@gmail.com', '987654321', 21, 'H', 'México', 'Guanajuato', 
'Parque Cuba', 'Parques La Noria', 130, 37570, '4774992123'), 
('10002', 'Ana Cristina', 'Argote Gasca', 'AArgote@gmail.com', '147258369', 30, 'M', 'México', 'Guanajuato', 
'Calle Hermenejildo', 'Villas de León', 128, 37570, '4779517364');

Insert into Comentario values 
('Com00', '10000', '01/05/2022', 'Muy buenos productos, excelente servicio.'),
('Com01', '10001', '15/03/2022', 'Excelente servicio, mi pedido llego bien.'),
('Com02', '10002', '15/03/2022', 'Sus diseños son geniales, excelente trabajo.');

Insert into Modelo values 
('Mo000', 'Astronauta', 200, 250, 30, 'Espacio'),
('Mo001', 'Mariposa', 230, 275, 10, 'Animales'),
('Mo002', 'Girasol', 200, 280, 8, 'Flores'),
('Mo003', 'Fenix', 440, 460, 8, 'Animales'),
('Mo004', 'Pluma', 245, 270, 6, 'Plumas'),
('Mo005', 'Colibrí Huichol', 320, 340, 3, 'Animales'),
('Mo006', 'Pirámide', 580, 600, 5, 'Cultura'),
('Mo007', 'Flor', 350, 380, 4, 'Flores'),
('Mo008', 'Mandala', 380, 400, 8, 'Abstracto'),
('Mo009', 'Rodeo Vaquero', 330, 350, 1, 'Vaqueros'),
('Mo010', 'Tiburón', 580, 600, 8, 'Animales'),
('Mo011', 'Pluma Arcoiris', 245, 270, 5, 'Plumas'),
('Mo012', 'Colibrí', 360, 380, 8, 'Animales'),
('Mo013', 'Quetzalcoatl', 480, 500, 9, 'Cultura'),
('Mo014', 'Flor', 250, 270, 4, 'Flores'),
('Mo015', 'Mandala', 330, 350, 3, 'Abstracto'),
('Mo016', 'Mariposa', 260, 290, 5, 'Animales'),
('Mo017', 'Rodeo Vaquero', 380, 400, 3, 'Vaqueros'),
('Mo018', 'Xolo', 420, 440, 5, 'Animales'),
('Mo019', 'Colibrí', 290, 320, 8, 'Animales'),
('Mo020', 'Muñeca Lele', 260, 290, 9, 'Cultura'),
('Mo021', 'Noche Estrellada', 500, 520, 2, 'Cultura'),
('Mo022', 'Unicornio', 325, 350, 8, 'Animales'),
('Mo023', 'Sirenita', 360, 380, 3, 'Princesas'),
('Mo024', 'Danny Phantom', 300, 325, 8, 'Caricaturas'),
('Mo025', 'Flor Vaquero', 380, 400, 2, 'Flores'),
('Mo026', 'Alcatraz', 300, 325, 3, 'Flores'),
('Mo027', 'Florecitas', 250, 270, 7, 'Flores'),
('Mo028', 'Pluma Mosaico', 245, 270, 4, 'Plumas'),
('Mo029', 'Monarca en rojo', 350, 370, 8, 'Animales'),
('Mo030', 'Pluma Colorida', 400, 420, 5, 'Plumas'),
('Mo031', 'Mandala Rosa-Azul', 300, 325, 2, 'Abstracto'),
('Mo032', 'Mandala Colorida', 500, 520, 1, 'Abstracto'),
('Mo033', 'Mandala Roja', 360, 380, 6, 'Abstracto'),
('Mo034', 'Mandala Azul Gamuza', 430, 450, 3, 'Abstracto'),
('Mo035', 'Mandala Ojo Turco', 380, 400, 8, 'Abstracto'),
('Mo036', 'Aguila', 420, 440, 4, 'Animales'),
('Mo037', 'Pez', 325, 350, 7, 'Animales'),
('Mo038', 'Lagartija', 260, 280, 2, 'Animales'),
('Mo039', 'Toro', 420, 440, 8, 'Animales'),
('Mo040', 'Guacamaya', 260, 290, 4, 'Animales'),
('Mo041', 'Venado', 420, 440, 1, 'Animales'),
('Mo042', 'Búho', 245, 270, 8, 'Animales'),
('Mo043', 'Colibrí', 260, 280, 5, 'Animales'),
('Mo044', 'Colibrí', 260, 280, 7, 'Animales'),
('Mo045', 'Calavera', 555, 580, 3, 'Festivo'),
('Mo046', 'Plants vs Zombies', 500, 520, 4, 'Juegos');

Insert into Pedido values
('90000', '10000', 'Mo015', '08/02/2022', 5, 16000, 'Nacional'),
('90001', '10002', 'Mo006', '01/05/2022', 4, 2400, 'Nacional'),
('90002', '10001', 'Mo025', '20/04/2022', 1, 400, 'Internacional');