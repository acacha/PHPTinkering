<?php

require 'lib/functions.php';
require 'models/Task.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','NEhcL1w1W6ndDc6P');
} catch (PDOException $e){
    die('Error connecting: ' . $e->getMessage() );
}

$statement = $pdo->prepare('SELECT * from tasks');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS,'Task');

//$tasks = [];
//foreach ($result as $taskdb) {
//    $task = new Task();
//    $task->name = $taskdb->name;
//    $task->completed = $taskdb->completed;
//    $tasks[]= $task;
//}
//$tasks = $result;


require 'versio9.view.php';