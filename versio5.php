<?php

// Objecte -> POO / OOP Paradigma orientat a objectes

class Person {
    // Propietats/Característiques:
    public $name;
    public $city;
    public $gender;

    //Mètodes <- Funcions
    // MVC -> Model -> dades i del comportament

    // Mètode per defecte -> Constructor

    // Mètodes màgics/especials -> __
    public function __construct($name) {
//        echo "M'estic inicialitzat";
        $this->name = $name;
        //Domini
    }

    //Altres mètodes

    // API --> Aplication public Interface
    public function greeting()
    {
        return $this->concatenate('Hola ', $this->name);
    }

    protected function concatenate()
    {
        return 'Hola ' . $this->name;
    }
}

//Contructors
$person1 = new Person('Sergi');
//$person1->name = 'Sergi Tur Badenas';
$person1->greeting();
$person1->contatenar();



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

