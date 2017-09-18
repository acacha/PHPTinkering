<?php

class Person {
    public $name;
    public $city;
    public $gender;
}

$person1 = new Person();
$person1->name = 'Sergi Tur Badenas';
$person1->city = 'Tortosa';

$person2 = new Person();
$person2->name = 'Sergi Tur Badenas';
$person2->city = 'Tortosa';

$person3 = new Person();
$person3->name = 'Sergi Tur Badenas';
$person3->city = 'Tortosa';

$persons = [
    $person1,
    $person2,
    $person3
];

require 'versio5.view.php';

