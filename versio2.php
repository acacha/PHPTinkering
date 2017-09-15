<?php

$user = htmlspecialchars($_GET['user']);

require 'versio2.view.php';

//http://localhost:8000/versio2.php?user=Maria
//
//function hola($user) {
//    echo htmlspecialchars($user);
//}
//
//hola('Maria');
//
//http://localhost:8000/versio2.php?user=Maria