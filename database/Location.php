<?php
require "../bootstrap.php";

use Illuminate\Database\Capsule\Manager as Capsule;

Capsule::schema()->create('locations', function ($table){

    $table->increments('id');
    $table->string('location')->unique();
});