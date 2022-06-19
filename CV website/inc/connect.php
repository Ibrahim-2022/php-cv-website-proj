<?php 
$servername = 'localhost:3307';
$username = 'root';
$password = '';
$db = 'CVdb';

$dbc = mysqli_connect($servername, $username, $password, $db)
or die('Connection Failed: '.mysqli_connect_errno());
?>