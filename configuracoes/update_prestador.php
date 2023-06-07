<?php

$servername = "localhost:3306";
$username = "root";
$password = "";
$database = "EZservice";

$conn = mysqli_connect($servername, $username, $password, $database);

session_start(); 

if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}