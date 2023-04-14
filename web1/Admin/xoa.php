<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foxie";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
}

// Xác nhận việc xoá chuyến bay
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM chuyenbay WHERE ID=$id";
    if ($conn->query($sql) === TRUE) {
        header("Location: hienthichuyenbay.php");
    } else {
        echo "Lỗi xoá chuyến bay: " . $conn->error;
    }
    
}

$conn->close();
?>
