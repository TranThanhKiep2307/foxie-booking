<?php
// Kiểm tra xem form đã được submit chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Kết nối đến cơ sở dữ liệu
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "foxie";

  $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error) {
    die("Kết nối đến cơ sở dữ liệu thất bại: " . $conn->connect_error);
  }

  // Lấy giá trị từ form
  $ID = $_POST["ID"];
  $diemdi = $_POST["diemdi"];
  $diemden = $_POST["diemden"];
  $ngaydi = $_POST["ngaydi"];
  $thoigiandi = $_POST["thoigiandi"];
  $thoigianden = $_POST["thoigianden"];

  // Thực hiện truy vấn để thêm chuyến bay vào cơ sở dữ liệu
  $sql = "INSERT INTO chuyenbay (ID, diemdi, diemden, ngaydi, thoigiandi, thoigianden) VALUES ('$ID', '$diemdi', '$diemden', '$ngaydi', '$thoigiandi', '$thoigianden')";

  if ($conn->query($sql) === TRUE) {
    header("Location: hienthichuyenbay.php");
  } else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
  }

  $conn->close();
}
?>