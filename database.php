<?php
$server='localhost';
$username='root';
$password='';
$database='php_auth';

$conn=new PDO("mysql:host=$server;dbname=$database;", $username, $password);
