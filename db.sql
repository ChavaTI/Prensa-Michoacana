USE PrensaMichoacana;

CREATE TABLE Titulo(
IdTitulo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nombre VARCHAR(50) NOT NULL,
Estado VARCHAR(15) NOT NULL,
Ciudad VARCHAR(15) NOT NULL,
Periodicidad VARCHAR(15) NOT NULL,
Responsable VARCHAR(30) NOT NULL,
NoPaginas INT NOT NULL,
OrientacionYMedidas VARCHAR(40) NOT NULL,
Status boolean NOT NULL
);

CREATE TABLE Tomo(
IdTomo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
NumeroTomo INT NOT NULL,
IdTitulo INT NOT NULL,
Status boolean NOT NULL
);

CREATE TABLE Numero( 
IdNumero INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
NoPeriodico INT NOT NULL,
Status boolean NOT NULL,
Fecha DATE,
IdTomo INT NOT NULL
);

CREATE TABLE Articulo(
IdArticulo INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
TipoDeArticulo VARCHAR(20) NOT NULL,
Redactor VARCHAR(30) NOT NULL,
Titulo VARCHAR(30) NOT NULL,
Contenido VARCHAR(1000) NOT NULL,
NoPagina INT,
Imagenes TINYINT(1) NOT NULL,
IdNumero INT NOT NULL,
Status boolean NOT NULL
);

CREATE TABLE Ciencia(
IdCiencia INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nombre VARCHAR(30) NOT NULL,   
IdArticulo INT NOT NULL,
Status boolean NOT NULL
);

CREATE TABLE Tecnologia(
IdTecnologia INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
Nombre VARCHAR(30) NOT NULL,   
IdArticulo INT NOT NULL,
Status boolean NOT NULL
);

CREATE TABLE  Usuario(
IdLogin INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
NombreUsuario VARCHAR(30) NOT NULL,
Pass VARCHAR(100) NOT NULL,
Email VARCHAR(30) NOT NULL unique,
Status boolean NOT NULL
);

ALTER TABLE Tomo
Add constraint Fk_Tomo_Titulo
Foreign Key(IdTitulo)
References Titulo(IdTitulo);

ALTER TABLE Numero
Add constraint Fk_Numero_Tomo
Foreign Key(IdTomo)
References Tomo(IdTomo);

ALTER TABLE Articulo
Add constraint Fk_Articulo_Numero
Foreign Key(IdNumero)
References Numero(IdNumero);

ALTER TABLE Ciencia
Add constraint Fk_Ciencia_Articulo
Foreign Key(IdArticulo)
References Articulo(IdArticulo);

ALTER TABLE Tecnologia
Add constraint Fk_Tecnologia_Articulo
Foreign Key(IdArticulo)
References Articulo(IdArticulo);



