<?php
session_start();

setcookie('myCookie[myAge]', $_POST['myAge'], time()+60+24);
setcookie('myCookie[myName]', $_POST['myName'], time()+60+24);




$myAge = $_POST['myAge'];
$myName = $_POST['myName'];



$_SESSION['myAge'] = $myAge;
$_SESSION['myName'] = $myName;










?>