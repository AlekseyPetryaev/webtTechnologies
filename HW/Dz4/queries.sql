


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
