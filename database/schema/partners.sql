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


