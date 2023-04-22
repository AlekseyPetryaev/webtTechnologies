-- Задача №3: Составить json по таблице, созданной при выполнении 4-го дз. (информация об одногруппниках с
-- четырьмя полями: id, name, age, address.) Ответ представить в виде файла 3.json и прикрепить скрин,
-- отображающий вид таблицы.

create table users (
    id integer primary key,
    name text not null,
    age integer not null,
    city text not null,
    street text not null,
    house integer null,
    flat integer not null
);
insert into users values (1, "Иван", 22, "Москва", "Красная", 2, 11),
                        (2, "Илья", 19, "Москва", "Лесеая", 10, 56),
                        (3, "Данил", 20, "Москва", "Морская", 107, 2),
                        (4, "Петя", 21, "Москва", "Горная", 22, 13);
select * from users;



-- переделал в фаил json

{"Каталог":                          
    [                                
        {"id": "1" ,
        "name": "Иван" ,       
        "age": "22" ,                        
        "city": "Москва" ,           
        "street": "Красная",
        "house": "2",
        "flat": "11"
        },
        {"id": "2" ,
        "name": "Илья" ,       
        "age": "19" ,                        
        "city": "Москва" ,           
        "street": "Лесная",
        "house": "10" ,
        "flat": "56"
        },             
        {"id": "3" ,
        "name": "Данил" ,       
        "age": "20" ,                        
        "city": "Москва" ,           
        "street": "Морская",
        "house": "107",
        "flat": "2"
        },
        {"id": "4" ,
        "name": "Петя" ,       
        "age": "21" ,                        
        "city": "Москва" ,           
        "street": "Горная",
        "house": "22",
        "flat": "13"
        }                                         
    ]                                
}
