<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foxie";
$conn = new mysqli($servername, $username, $password, $dbname);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Trích xuất giá trị ngày bắt đầu và kết thúc từ biểu mẫu
  $start_date = $_POST["start_date"];
  $end_date = $_POST["end_date"];

  // Truy vấn cơ sở dữ liệu để tính tổng doanh thu trong khoảng thời gian đã chọn
  $sql = "SELECT SUM(amount) as total_revenue
          FROM revenue
          WHERE month BETWEEN '$start_date' AND '$end_date'";
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    // Hiển thị tổng doanh thu
    $row = $result->fetch_assoc();
    $total_revenue = $row["total_revenue"];
    echo "Total revenue: $total_revenue";
  } else {
    echo "No revenue data found for selected period";
  }
  echo "<br>";
}
$conn->close();
?>
