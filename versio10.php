<?php

require 'lib/functions.php';
require 'models/Task.php';

$pdo = connect();
$tasks = fetchAllTasks($pdo);

//Laravel
//$tasks = Task::all();

require 'versio10.view.php';