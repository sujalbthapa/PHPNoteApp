<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "inote";
$table = "logininfo";

$conn = new mysqli($servername, $username, $password);

if (!$conn->connect_error) {
  echo"<script>console.log('Connected successfully')</script>";
}else{
  die("Sorry we failed to connect: ". $conn->error);
}


$sql = "CREATE DATABASE IF NOT EXISTS $database";

if ($conn->query($sql) === TRUE) {
  echo"<script>console.log('Database created successfully')</script>";
} else {
  die("Error creating database: " . $conn->error);
} 

$conn = new mysqli($servername, $username, $password, $database);

if (!$conn->connect_error) {
  echo"<script>console.log('Connected successfully')</script>";
}else{
  die("Sorry we failed to connect: ". mysqli_connect_error());
}

$sql = " CREATE TABLE IF NOT EXISTS $table (
  sno INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  name varchar(50) NOT NULL,
  email varchar(50) NOT NULL,
  password varchar(50) NOT NULL
  )";

if ($conn->query($sql)===true) {
  echo"<script>console.log('Table created successfully')</script>";
} else {
  die("Error creating table: " . $conn->error);
}

?>