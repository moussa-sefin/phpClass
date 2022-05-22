<?php
$dsn = 'mysql:host=localhost;dbname=tumbadb';
$username = 'root';
$password = '';
$options = [];
try {
$connection = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) 
{
 echo $e->message();
}