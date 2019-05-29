create table if not exists locations
(
  id       int unsigned auto_increment
    primary key,
  location varchar(255) not null,
  constraint locations_location_unique
    unique (location)
);

ALTER TABLE locations
insert into agrovir_homework.locations (location) values ('Budapest');
ALTER TABLE locations
insert into agrovir_homework.locations (location) values ('Kaposvár');
ALTER TABLE locations
insert into agrovir_homework.locations (location) values ('Keszthely');
ALTER TABLE locations
insert into agrovir_homework.locations (location) values ('Tokaj');

