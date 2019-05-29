<?php

require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('company_types', function ($table){

    $table->increments('id');
    $table->string('type');

});