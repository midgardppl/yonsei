<?php
header('Content-Type: application/json');

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'yonseicoop';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query = "SELECT * FROM produk";
$result = $conn->query($query);

if ($result->num_rows > 0) {
    $data = array();

    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }

    echo json_encode($data);
} else {
    echo json_encode(array('message' => 'No records found.'));
}

$conn->close();
?>
