create table if not exists company_types
(
  id   int unsigned auto_increment
    primary key,
  company_type varchar(255) not null
);

ALTER TABLE company_types
insert into agrovir_homework.company_types (company_type) values ('Zrt.');
ALTER TABLE company_types
insert into agrovir_homework.company_types (company_type) values ('Nyrt.');
ALTER TABLE company_types
insert into agrovir_homework.company_types (company_type) values ('Kft.');
ALTER TABLE company_types
insert into agrovir_homework.company_types (company_type) values ('Bt.');
ALTER TABLE company_types
insert into agrovir_homework.company_types (company_type) values ('EV');
