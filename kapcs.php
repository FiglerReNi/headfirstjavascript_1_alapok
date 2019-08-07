<?php

//Állandók
define('HOST', "localhost");
define('USER', "root");
define('PASS', "");
define('AB', "houses");

//Kapcsolat
$kapcs = mysqli_connect(HOST, USER, PASS, AB);
if (!$kapcs) {
    die(mysqli_connect_error());
}
mysqli_query($kapcs, "SET NAMES utf8");