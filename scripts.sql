reate a database
	create database jmicart;
	use jmicart;
	 

create table manufacturer (
	mid int primary key auto_increment,
	mname varchar(30) not null,
	memail varchar(30),
	mconact varchar(15)
);