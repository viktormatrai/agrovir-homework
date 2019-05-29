<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('partners', function ($table){

    $table -> increments('id');
    $table -> string('company_name') -> unique();
    $table -> string('tax_number') -> unique();
    $table -> string('company_registration_number') -> unique();
    $table -> string('address');
    $table -> string('bank_account_number') -> unique();
    $table -> string('phone_number');
    $table -> integer('company_type_id')->unsigned();
    $table -> integer('location_id')->unsigned();

    $table -> foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
    $table -> foreign('company_type_id')->references('id')->on('company_type')->onDelete('cascade');
});