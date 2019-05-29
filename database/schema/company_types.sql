create table if not exists company_types
(
  id   int unsigned auto_increment
    primary key,
  type varchar(255) not null
);

ALTER TABLE company_types
insert into agrovir_homework.company_types (type) values ('Zrt.');
ALTER TABLE company_types
insert into agrovir_homework.company_types (type) values ('Nyrt.');
ALTER TABLE company_types
insert into agrovir_homework.company_types (type) values ('Kft.');
ALTER TABLE company_types
insert into agrovir_homework.company_types (type) values ('Bt.');
ALTER TABLE company_types
insert into agrovir_homework.company_types (type) values ('EV');
