<?php

require 'lib/functions.php';
require 'services/Connection.php';
require 'services/QueryBuilder.php';

$config = require 'config/config.php';

$pdo = Connection::connect($config);
//dd($pdo);
$query = new QueryBuilder($pdo);
