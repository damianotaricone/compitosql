create table cliente(
    id_c int auto_increment primary key,
    nome text,
    cognome text
);
insert into Customer values(0,"marcello","verdi");
insert into Customer values(0,"prova","Rossi");

create table Prodotto(
    id_p int auto_increment primary key,
    tipo text,
    cod_c int not null references Cliente(id_c),
    foreign key(cod_c)
);

 insert into Products values(0,"pasta",1);
insert into Products values(0,"carne",2);
insert into Products values(0,"pesce",2);
