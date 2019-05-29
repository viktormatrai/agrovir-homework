create table if not exists locations
(
  id       int unsigned auto_increment
    primary key,
  location varchar(255) not null,
  constraint locations_location_unique
    unique (location)
);


