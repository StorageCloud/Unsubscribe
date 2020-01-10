create database unsubscribe;

use unsubscribe;

create table register_unsubscribe(
id_register int not null identity(1,1),
email varchar(50) not null,
promotions varchar(50) not null,
comment varchar(max) not null,
dateunsubscribe datetime not null
)


insert into register_unsubscribe values ('je@gmail.com','black','no deseo',GETDATE()) 

select * from Register_Unsubscribe

truncate table Register_Unsubscribe