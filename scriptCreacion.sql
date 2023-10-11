CREATE TABLE aula(
    idAula VARCHAR(10) NOT NULL,
    nombre VARCHAR(30) NULL,
    tipo VARCHAR(30) NULL,
    PRIMARY KEY (idAula)
);
CREATE TABLE materia(
    idMateria VARCHAR(10) NOT NULL,
    nombre VARCHAR(45) NULL,
    PRIMARY KEY (idMateria)
	);
CREATE TABLE persona (
  ci INT NOT NULL,
  nombre VARCHAR(20) NULL,
  paterno VARCHAR(20) NULL,
  materno VARCHAR(20) NULL,
  genero VARCHAR(20) NULL,
  fenac VARCHAR(20) NULL,
  PRIMARY KEY (ci)
  );
CREATE TABLE estudiante (
    matricula INT NOT NULL,
    promedio DOUBLE(10, 2) NULL,
    ci int null,
    depto VARCHAR(20) NULL,
    PRIMARY KEY (matricula),
    FOREIGN KEY (ci) REFERENCES persona(ci)
    );
CREATE TABLE docente (
    iddocente INT NOT NULL,
    sueldo DOUBLE(10, 2) NULL,
    ci int null,
    PRIMARY KEY (iddocente),
    FOREIGN KEY (ci) REFERENCES persona(ci)
    );

CREATE TABLE paralelo(
    idparalelo INT NOT NULL,
    idAula VARCHAR(10) NULL,
    iddocente INT NULL,
    idMateria VARCHAR(10) NULL,
    horario VARCHAR(10) NULL,
    nombre VARCHAR(2) NULL,
    PRIMARY KEY(idparalelo)
);
CREATE TABLE isncripcion (
    idinsc INT NOT NULL,
    semestre INT NULL,
    idpar INT NULL,
    matricula INT NULL,
    PRIMARY KEY (idinsc),  
    FOREIGN KEY (idpar) REFERENCES paralelo(idparalelo)
    );
CREATE TABLE usuario(
    ci int null,
    usuario VARCHAR(20),
    contras VARCHAR(20),
    rol VARCHAR(20),
    PRIMARY KEY (ci)
)



INSERT INTO persona VALUES(787878,'Pedro','Quispe','Pedraza','Masculino','20/02/1999');
INSERT INTO persona VALUES(787879,'Camilo','Huanca','Morales','Masculino','02/03/1990');
INSERT INTO persona VALUES(787880,'Maria','Salinas','Murillo','Femenino','05/05/2002');
INSERT INTO persona VALUES(787881,'Carla','Alegre','Sullca','Femenino','27/05/2003');

INSERT INTO persona VALUES(787882,'Samuel','Gordillo','Murillo','Masculino','03/05/2002');
INSERT INTO persona VALUES(787883,'Ivan','Mallku','Capquique','Masculino','22/05/2003');



INSERT INTO estudiante VALUES(11111,70.8,787878,'Cochabamba');
INSERT INTO estudiante VALUES(11112,90.8,787881,'La Paz');
INSERT INTO estudiante VALUES(11113,10.8,787882,'Cochabamba');
INSERT INTO estudiante VALUES(11114,93.8,787883,'La Paz');

INSERT INTO docente VALUES(1,5000,787879);
INSERT INTO docente VALUES(2,5000,787880);

INSERT INTO usuario VALUES(787878,'pedrito','pedrito123','estudiante');
INSERT INTO usuario VALUES(787881,'carlita','carlita123','estudiante');
INSERT INTO usuario VALUES(787879,'cam','cam123','docente');
INSERT INTO usuario VALUES(787880,'mar','mar123','docente');

select
avg(case when depto='La Paz' then promedio end) LP,
avg(case when depto='Beni' then promedio end) BN,
avg(case when depto='Pando' then promedio end) PD,
avg(case when depto='Cochabamba' then promedio end) CB,
avg(case when depto='Santa Cruz' then promedio end) SC,
avg(case when depto='Oruro' then promedio end) ORU,
avg(case when depto='Chuquisaca' then promedio end) CH,
avg(case when depto='Tarija' then promedio end) TJ,
avg(case when depto='Potosi' then promedio end) PT
from estudiante