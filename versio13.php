<?php

require 'models/Task.php';
require 'bootstrap/bootstrap.php';

$tasks = $query->fetchAll('tasks');

require 'versio13.view.php';


