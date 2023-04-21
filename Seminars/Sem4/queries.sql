ВАРИАНТ1 создать не большую базу
create table users (
    id integer primary key,
    name text not null,
    age integer not null,
    proff text not null
);
insert into users values (1, "Иван", 35, "Менеджер"),
                        (2, "Илья", 18, "Разработчик"),
                        (3, "Ашот", 32, "Програмист"),
                        (4, "Вася", 72, "Разработчик");
select * from users;

Output:

id	name	age	proff
1	Иван	35	Менеджер
2	Илья	18	Разработчик
3	Ашот	32	Програмист
4	Вася	72	Разработчик

ВАРИАНТ2 найти в этой базе разработчиуов старше 18 лет
create table users (
    id integer primary key,
    name text not null,
    age integer not null,
    proff text not null
);
insert into users values (1, "Иван", 35, "Менеджер"),
                        (2, "Илья", 18, "Разработчик"),
                        (3, "Ашот", 32, "Програмист"),
                        (4, "Вася", 72, "Разработчик");
select 
* 
from 
users
where
age >18 and proff ="Разработчик";

Output:

id	name	age	proff
4	Вася	72	Разработчик


Д/з 4сем
create table users (
    id integer primary key,
    last text not null,
    first text not null,
    age integer not null,
    level text not null
);
insert into users values (1, "Иванов", "Иван", 22, "Хор"),
                        (2, "Петров", "Илья", 19, "Отл"),
                        (3, "Ашотоян", "Данил", 20, "Удо"),
                        (4, "Василян", "Петя", 21, "Хор");
select * from users;

Output:

id	last	first	age	level
1	Иванов	Иван	22	Хор
2	Петров	Илья	19	Отл
3	Ашотоян	Данил	20	Удо
4	Василян	Петя	21	Хор
