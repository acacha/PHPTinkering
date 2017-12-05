<?php

require 'models/Task.php';
require 'bootstrap/bootstrap.php';

$tasks = $query->fetchAll('tasks');

require 'versio14.view.php';


