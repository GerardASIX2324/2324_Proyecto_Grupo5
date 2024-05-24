create database bd_escuela_proyecto;
show databases;
use bd_escuela_proyecto;

create table tbl_alumno (
    `id_alum` int(9) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `nombre_alum` varchar(20) NOT NULL,
    `apellidos_alum` varchar(50) NOT NULL,
    `DNI_alum` char(9) NULL,
    `telf_alum` char(9) NULL,
    `mail_alum` varchar(60) NULL,
    `fecha_naci_alum` date NOT NULL,
    `id_clase` int(4) NOT NULL 
);

create table tbl_clase (
    `id_clase` int(4) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `nombre_clase` varchar(20) NOT NULL,
    `id_prof` int(3) NOT NULL,
    `id_ciclo` int(3) NOT NULL
);

create table tbl_profesor (
    `id_prof` int(4) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `nombre_prof` varchar(20) NOT NULL,
    `apellidos_prof` varchar(50) NOT NULL,
    `DNI_prof` char(9) NULL,
    `telf_prof` char(9) NULL,
    `mail_prof` varchar(60) NULL,
    `id_dept` int(3) NOT NULL
);

create table tbl_ciclo (
    `id_ciclo` int(3) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `nombre_ciclo` varchar(50) NOT NULL,
    `siglas_ciclo` varchar(7) NOT NULL,
    `id_dept` int(3) NOT NULL

);

create table tbl_departamento (
    `id_dept` int(3) AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `nombre_dept` varchar(50) NOT NULL,
    `siglas_dept` varchar(7) NOT NULL
);


alter table tbl_alumno 
add constraint `rel_clase_alunmno` foreign key 
(`id_clase`) references tbl_clase(`id_clase`);

alter table tbl_clase 
add constraint `rel_ciclo_clase` foreign key 
(`id_ciclo`) references tbl_ciclo(`id_ciclo`);

alter table tbl_ciclo
add constraint `rel_departamento_ciclo` foreign key 
(`id_dept`) references tbl_departamento(`id_dept`);

alter table tbl_profesor 
add constraint `rel_departamento_profesor` foreign key 
(`id_dept`) references tbl_departamento(`id_dept`);


-- Insert departamentos
insert into tbl_departamento (nombre_dept, siglas_dept )
VALUES ('Departamento de informatica', 'D_INFOR' );
insert into tbl_departamento (nombre_dept, siglas_dept )
VALUES ('Departamento de Gestion Adminstrativa', 'D_GA' );

-- Insert ciclos
insert into tbl_ciclo (nombre_ciclo, siglas_ciclo, id_dept )
VALUES ('Administracion de Sistemas Informaticos y Redes', 'ASIX', 1);
insert into tbl_ciclo (nombre_ciclo, siglas_ciclo, id_dept )
VALUES ('Gestión Adminstrativa', 'GA', 2);
insert into tbl_ciclo (nombre_ciclo, siglas_ciclo, id_dept)
VALUES ('Sistemas Microinformaticos y Redes', 'SMX', 1);

-- Inserts profes 

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Carlos', 'Ruiz Sánchez', '12345678A', '987654321', 'carlos@profesor.com', 1);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Ana', 'Gómez Martín', '23456789B', '654987321', 'ana@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Miguel', 'López Pérez', '34567890C', '123456789', 'miguel@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Laura', 'Hernández Rodríguez', '45678901D', '987654321', 'laura@profesor.com', 1);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('David', 'García Martínez', '56789012E', '654987321', 'david@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Sara', 'Pérez Gómez', '67890123F', '123456789', 'sara@profesor.com', 1);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Javier', 'Martínez López', '78901234G', '987654321', 'javier@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Elena', 'Gómez Rodríguez', '89012345H', '654987321', 'elena@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Daniel', 'Hernández Pérez', '90123456I', '123456789', 'daniel@profesor.com', 1);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Carmen', 'Martín Gómez', '11234567J', '987654321', 'carmen@profesor.com', 1);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Juan', 'López Martínez', '12345678K', '654987321', 'juan@profesor.com', 1);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('María', 'García Rodríguez', '23456789L', '123456789', 'maria@profesor.com', 1);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Pedro', 'Hernández Gómez', '34567890M', '987654321', 'pedro@profesor.com', 1);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Lucía', 'Martínez López', '45678901N', '654987321', 'lucia@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Diego', 'García Martínez', '56789012O', '123456789', 'diego@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Natalia', 'López Pérez', '67890123P', '987654321', 'natalia@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Jorge', 'Martínez Gómez', '78901234Q', '654987321', 'jorge@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Eva', 'García Rodríguez', '89012345R', '123456789', 'eva@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Marcos', 'López Martínez', '90123456S', '987654321', 'marcos@profesor.com', 2);

INSERT INTO tbl_profesor (nombre_prof, apellidos_prof, DNI_prof, telf_prof, mail_prof, id_dept)
VALUES ('Ana', 'Gómez López', '21234567T', '654987321', 'ana@profesor.com', 1);


-- Insert clases
insert into tbl_clase (nombre_clase, id_prof, id_ciclo )
VALUES ('ASIX1', 4, 1);
insert into tbl_clase (nombre_clase, id_prof, id_ciclo )
VALUES ('ASIX2', 9, 1);
insert into tbl_clase (nombre_clase, id_prof, id_ciclo )
VALUES ('GA1', 8, 2);
insert into tbl_clase (nombre_clase, id_prof, id_ciclo )
VALUES ('GA2', 6, 2);
insert into tbl_clase (nombre_clase, id_prof, id_ciclo )
VALUES ('SMX1', 17, 3);
insert into tbl_clase (nombre_clase, id_prof, id_ciclo )
VALUES ('SMX2', 15, 3);


-- Insert alumnos 
INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Juan', 'Pérez Gómez', '12345678A', '123456789', 'juan@alumno.com', '2000-05-15', 6);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('María', 'López Rodríguez', '87654321B', '987654321', 'maria@alumno.com', '1999-10-20', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Pedro', 'García Martínez', '56789012C', '654987321', 'pedro@alumno.com', '2001-03-05', 6);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Ana', 'Fernández López', '34567890D', '123456789', 'ana@alumno.com', '1998-08-10', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('David', 'Martínez Pérez', '45678901E', '987654321', 'david@alumno.com', '2002-01-30', 4);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Laura', 'González Sánchez', '23456789F', '654987321', 'laura@alumno.com', '2003-06-25', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Sofía', 'Hernández García', '98765432G', '123456789', 'sofia@alumno.com', '2000-09-12', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Alejandro', 'Díaz Fernández', '87654321H', '987654321', 'alejandro@alumno.com', '1999-04-18', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Lucía', 'Martín Pérez', '76543210I', '654987321', 'lucia@alumno.com', '2001-11-23', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Daniel', 'Gómez Rodríguez', '65432109J', '123456789', 'daniel@alumno.com', '2002-07-08', 4);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Carmen', 'Sánchez Martínez', '54321098K', '987654321', 'carmen@alumno.com', '2000-02-15', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Javier', 'Rodríguez Gómez', '43210987L', '654987321', 'javier@alumno.com', '1998-05-30', 6);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Elena', 'García Sánchez', '32109876M', '123456789', 'elena@alumno.com', '2001-10-05', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Diego', 'Alonso Pérez', '21098765N', '987654321', 'diego@alumno.com', '1999-08-27', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Andrea', 'Fernández Martínez', '10987654O', '654987321', 'andrea@alumno.com', '2000-04-13', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Iker', 'González Rodríguez', '29876543P', '123456789', 'iker@alumno.com', '2002-01-19', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Natalia', 'Martínez Gómez', '98765432Q', '987654321', 'natalia@alumno.com', '2001-07-05', 4);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Marcos', 'Pérez García', '87654321R', '654987321', 'marcos@alumno.com', '1998-03-21', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Sara', 'López Fernández', '76543210S', '123456789', 'sara@alumno.com', '2000-11-17', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Hugo', 'Gómez Sánchez', '65432109T', '987654321', 'hugo@alumno.com', '1999-06-03', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Manuel', 'Hernández López', '54321098U', '123456789', 'manuel@alumno.com', '2001-02-09', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Eva', 'Martínez Rodríguez', '43210987V', '987654321', 'eva@alumno.com', '1999-09-25', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Adrián', 'García Martín', '32109876W', '654987321', 'adrian@alumno.com', '2000-04-14', 6);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Cristina', 'López Sánchez', '21098765X', '123456789', 'cristina@alumno.com', '1998-11-30', 4);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Jorge', 'Fernández Gómez', '10987654Y', '987654321', 'jorge@alumno.com', '2002-07-18', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Lucas', 'Pérez Rodríguez', '49876543Z', '654987321', 'lucas@alumno.com', '2001-03-12', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Martina', 'Gómez López', '987654326A', '123456789', 'martina@alumno.com', '1999-10-08', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Paula', 'Hernández Rodríguez', '87654321B', '123456789', 'paula@alumno.com', '2000-05-28', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Mario', 'Martínez Gómez', '76543210C', '987654321', 'mario@alumno.com', '2001-11-10', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Luna', 'García Pérez', '65432109D', '654987321', 'luna@alumno.com', '1999-04-03', 6);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Pablo', 'Fernández Martín', '54321098E', '123456789', 'pablo@alumno.com', '2000-09-15', 6);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Valentina', 'López García', '4321098AF', '987654321', 'valentina@alumno.com', '2002-02-20', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Alex', 'Martín Fernández', '32109876G', '654987321', 'alex@alumno.com', '1998-07-12', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Carla', 'Gómez Rodríguez', '21098765A', '123456789', 'carla@alumno.com', '2001-12-28', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Santiago', 'Pérez López', '10987654I', '987654321', 'santiago@alumno.com', '1999-06-25', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Elsa', 'Hernández Martínez', '29876543J', '654987321', 'elsa@alumno.com', '2000-01-17', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Ivan', 'García Gómez', '98765432K', '123456789', 'ivan@alumno.com', '2001-08-05', 4);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Aitana', 'López Martín', '87654321L', '987654321', 'aitana@alumno.com', '1998-03-30', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Hector', 'Martín Rodríguez', '76543210M', '654987321', 'hector@alumno.com', '2000-10-12', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Elena', 'Gómez López', '65432109A', '123456789', 'elena@alumno.com', '2001-07-02', 6);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Enzo', 'López Pérez', '54321098AO', '987654321', 'enzo@alumno.com', '1999-02-18', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Nora', 'Pérez Gómez', '43210987A', '654987321', 'nora@alumno.com', '2002-09-05', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Leonardo', 'Martínez Martín', '32109876Q', '123456789', 'leonardo@alumno.com', '2000-11-23', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Isabella', 'Gómez Rodríguez', '21098765R', '987654321', 'isabella@alumno.com', '1998-06-10', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Miguel', 'Hernández Sánchez', '10987654S', '654987321', 'miguel@alumno.com', '2001-03-15', 4);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Camila', 'López Martínez', '79876543T', '123456789', 'camila@alumno.com', '2002-12-20', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Mateo', 'García Martínez', '98765432U', '987654321', 'mateo@alumno.com', '2000-08-18', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Marta', 'Martín López', '87654321V', '654987321', 'marta@alumno.com', '1999-05-23', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Hugo', 'López Rodríguez', '76543210W', '123456789', 'hugo@alumno.com', '2001-10-10', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Valeria', 'Gómez Sánchez', '65432109X', '987654321', 'valeria@alumno.com', '2002-04-05', 4);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Alejandro', 'Hernández Martínez', '54321098Y', '654987321', 'alejandro@alumno.com', '1998-01-30', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Julia', 'Martínez Gómez', '43210987Z', '123456789', 'julia@alumno.com', '2000-06-15', 6);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Gabriel', 'Gómez Rodríguez', '32109876A', '987654321', 'gabriel@alumno.com', '2001-09-20', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Emma', 'López Fernández', '21098765B', '654987321', 'emma@alumno.com', '1999-04-12', 4);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Martín', 'Martínez Pérez', '10987654C', '123456789', 'martin@alumno.com', '2002-11-27', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Alba', 'García Rodríguez', '39876543D', '987654321', 'alba@alumno.com', '2000-07-22', 2);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Juan', 'Hernández Gómez', '98765432E', '654987321', 'juan@alumno.com', '1998-02-28', 3);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Ana', 'Gómez Martínez', '87654321F', '123456789', 'ana@alumno.com', '2001-09-15', 4);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Diego', 'López Gómez', '76543210G', '987654321', 'diego@alumno.com', '2000-04-20', 5);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Valentina', 'Martínez Fernández', '65432109B', '654987321', 'valentina@alumno.com', '1999-11-10', 2); 

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Alex', 'Naranjo Silva', '56545212L', '486657342', 'alex@alumno.com', '2000-04-20', 1);

INSERT INTO tbl_alumno (nombre_alum, apellidos_alum, DNI_alum, telf_alum, mail_alum, fecha_naci_alum, id_clase)
VALUES ('Pepe', 'Martínez Lopez', '25436182B', '45596639', 'valentina@alumno.com', '1999-11-10', 6);

