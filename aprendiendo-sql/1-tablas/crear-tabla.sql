/*
int(n° caracteres)                             ENTERO
integer(n° caracteres)                      ENTERO
varchar(n° caracteres)                     STRING  / ALFANUMERICO (maximo 255)
char(n° caracteres)                          STRING / ALFANUMERICO 
float(n° cifras, n° decimales)           DECIMAL / COMA FLOTANTE
date, time, timestamp

//STRING MAS GRANDES
TEXT                      65535 caracteres
MEDIUMTEXT       16 millones
LOGTEXT              4 billones de caracteres

//ENTEROS MAS GRANDES
MEDIUMINT
BIGINT
*/
/*
desc usuarios;  es para describir la tabla 
*/
/*
Crear una tablas
*/
CREATE TABLE usuarios(
id int(11),
nombre      varchar(100),
apellidos     varchar(255),
email           varchar(255),
password     varchar(255),
direccion varchar(255)
);