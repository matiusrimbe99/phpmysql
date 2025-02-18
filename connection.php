<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "kepegawaian";

try {
    // $connection = mysqli_connect($servername, $username, $password, $database);
    $db = new PDO("mysql:host=localhost;dbname=kepegawaian", "root", "");
} catch (Exception $error) {
    echo "Connection failed\n";
    echo "Error: " . $error->getMessage();
}
