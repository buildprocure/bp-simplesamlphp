<?php
ob_start();
/* $update = false;
$delete = false; */
//Connect to the database
$host = getenv('MYSQL_HOST') ?: 'db';
$db   = getenv('MYSQL_DATABASE') ?: 'ilife';
$user = getenv('MYSQL_USER') ?: 'root';
$pass = getenv('MYSQL_PASSWORD') ?: '';
$port = getenv('MYSQL_PORT') ?: '3306';

// Use mysqli to connect to MySQL

  $conn = mysqli_connect($host, $user, $pass, $db, $port);

  // Die if connection was not successful
 if (!$conn){
    die("Sorry we failed to connect to database: ". mysqli_connect_error());
 }

//  // DSN (Data Source Name)
//  $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=utf8mb4";
//  try {      
//      $pdo = new PDO($dsn, $user, $pass);
//      // Set PDO error mode to exception
//      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//  } catch (PDOException $e) {
//      die("Could not connect to the database via PDO: " . $e->getMessage());
//  }

?>
