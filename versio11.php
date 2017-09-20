<?php

require 'lib/functions.php';
require 'models/Task.php';
require 'services/Connection.php';
require 'services/QueryBuilder.php';

//$connection = new Connection();
$pdo = Connection::connect();
//$pdo = connect();
$query = new QueryBuilder($pdo);
$tasks = $query->fetchAll('tasks');
//$tasks = fetchAllTasks($pdo);


//Laravel
//$tasks = Task::all();

require 'versio11.view.php';

//class Contractor {
//    protected $pintor;
//    protected $paleta;
//    protected $electricista;
//
//    function __construct($pintor, $paleta, $electricista)
//    {
//        $this->pintor = $pintor;
//        $this->paleta = $paleta;
//        $this->electricista = $electricista;
//    }
//}