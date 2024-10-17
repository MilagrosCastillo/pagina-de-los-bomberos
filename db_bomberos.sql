create database bomberos;

use bomberos;

create table usersadmin(
	id int auto_increment primary key unique,
    usuario varchar(255),
    pass varchar(255)
);

insert into usersadmin (usuario, pass) values ('Milagros','1234');

-- select * from usersadmin;

select * from usersadmin where usuario = 'Milagros';
