<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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

    <header>
        <h1>Dashboard</h1>
        <nav>
            <ul>

            </ul>
        </nav>
        <div class="user">
            <p>Xin chào, Admin!</p>
            <a href="logout.php">Đăng xuất</a>
        </div>
    </header>

    <div class="container">
        <div class="leftColumn">
            <div class="group-box">
                <div class="title">DANH MỤC</div>
                <div class="leftMenu">
                    <ul>
                        <li><a href="themchuyenbay.php">Thêm vé</a></li>
                        <li><a href="hienthichuyenbay.php">Danh sách chuyến bay</a></li>
                        <li><a href="doanhthu.php">Doanh thu</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rightColumn">
            <main>
            <main>
    <form method="post" action="">
        <label for="start_date">Ngày bắt đầu :</label>
        <input type="date" id="start_date" name="start_date">

        <label for="end_date">Ngày kết thúc:</label>
        <input type="date" id="end_date" name="end_date">

        <button type="submit">Chọn</button>
        <?php if (isset($total_revenue)): ?><br></br>
            <div class="total-revenue"><?php echo "Tổng doanh thu là: " . $total_revenue; ?></div>
        <?php endif; ?>
    </form>
</main>

                </form>
            </main>
        </div>
    </div>
</body>
<footer>
    <p>&copy; 2023 - Trang quản trị bán vé máy bay</p>
</footer>

</html>