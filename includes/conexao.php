<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "blog";

// Crie a conexão
$conn = new mysqli($servername, $username, $password, $dbname);



// Verifique a conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
