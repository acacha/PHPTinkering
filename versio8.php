<?php

//$task = new Task();
//$task->name = "comprar llet"
//$task->completed = false

// PDO PHP Data Objects

require 'lib/functions.php';

try {
    $pdo = new PDO('mysql:host=127.0.0.1;dbname=prova','debian-sys-maint','NEhcL1w1W6ndDc6P');
} catch (PDOException $e){
    die('Error connecting: ' . $e->getMessage() );
}

$statement = $pdo->prepare('SELECT * from tasks');

$statement->execute();

//dd($statement->fetchAll());

$result = $statement->fetchAll(PDO::FETCH_OBJ);

//dd($result);
//foreach ($result as $task) {
//    dump($task['name']);
//}

//$task1 = [
//    'name' => 'Comprar llet'
//];
//
//$task2 = [
//    'name' => 'Comprar pa'
//];
//
//$task3 = [
//    'name' => 'Comprar vi'
//];

$tasks = $result;

//$tasks = Task::all();

//die('Ok connecting');

require 'versio8.view.php';