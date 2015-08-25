<?php

$servername = "localhost";
$username = "root";
$password = "";
$database = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if ($_GET['name']) {

    $result = $conn->query("select * from country where name like '" . $_GET['name'] . "%'");
    $row = $result->fetch_all(MYSQLI_ASSOC);

    echo json_encode($row);
    $conn->close();
}

