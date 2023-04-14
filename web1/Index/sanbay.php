<?php
// Kết nối đến CSDL
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foxie";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Truy vấn bảng sân bay
$sql = "SELECT * FROM sanbay";
$result = mysqli_query($conn, $sql);

// Tạo các select options cho điểm đi và điểm đến
$optionsFrom = "";
$optionsTo = "";

if (mysqli_num_rows($result) > 0) {
  while($row = mysqli_fetch_assoc($result)) {
    $optionsFrom .= "<option value='".$row["diemdi"]."'>".$row["diemdi"]."</option>";
    $optionsTo .= "<option value='".$row["diemden"]."'>".$row["diemden"]."</option>";
  }
}

// Đóng kết nối CSDL
mysqli_close($conn);
?>

