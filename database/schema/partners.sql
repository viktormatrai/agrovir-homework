create table if not exists partners
(
  id                          int unsigned auto_increment
    primary key,
  company_name                varchar(255) not null,
  tax_number                  varchar(255) not null,
  company_registration_number varchar(255) not null,
  address                     varchar(255) not null,
  bank_account_number         varchar(255) not null,
  phone_number                varchar(255) not null,
  note                        varchar(255),
  company_type_id             int unsigned not null,
  location_id                 int unsigned not null,
  constraint partners_FK
    foreign key (id) references locations (id)
      on delete cascade,
  constraint partners_FK_1
    foreign key (id) references company_types (id)
      on delete cascade
);

ALTER TABLE partners
insert into agrovir_homework.partners (company_name, tax_number, company_registration_number, address, bank_account_number, phone_number, company_type_id, location_id, note) values ('Budapest company', 0000000000, 0000000000000, '1011 Clarck Adam sqr 1.', 00000000, +36111111111, 1, 1, 'ok');
ALTER TABLE partners
insert into agrovir_homework.partners (company_name, tax_number, company_registration_number, address, bank_account_number, phone_number, company_type_id, location_id, note) values ('Kaposvar company', 0000000001, 0000000000001, '1011 Budapesti str 1.', 00000001, +36851111111, 2, 2, null);
ALTER TABLE partners
insert into agrovir_homework.partners (company_name, tax_number, company_registration_number, address, bank_account_number, phone_number, company_type_id, location_id, note) values ('Kaposvar company', 0000000011, 0000000000002, '1011 Petőfi S. str 1.', 00000001, +36701111111, 3, 3, Keszthelyi telephely);



