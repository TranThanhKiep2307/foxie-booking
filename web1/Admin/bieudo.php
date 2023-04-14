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

// Kết nối đến cơ sở dữ liệu
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "foxie";
$conn = new mysqli($servername, $username, $password, $dbname);

// Truy vấn cơ sở dữ liệu để lấy dữ liệu cho biểu đồ
$sql = "SELECT month, SUM(amount) as total_revenue
        FROM revenue
        GROUP BY month";
$result = $conn->query($sql);

// Định dạng dữ liệu để trả về dưới dạng JSON
$data = array();
$labels = array();
$values = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        array_push($labels, $row["month"]);
        array_push($values, $row["total_revenue"]);
    }
}

$data["labels"] = $labels;
$data["data"] = $values;

echo json_encode($data);
$conn->close();
?>

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
	<canvas id="myChart"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        var ctx = document.getElementById('myChart').getContext('2d');
        var chart = new Chart(ctx, {
            type: 'bar',
            data: {
                labels: ['Revenue'],
                datasets: [{
                    label: 'Revenue',
                    data: [<?php echo $total_revenue ?>],
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    yAxes: [{
                        ticks: {
                            beginAtZero: true
                        }
                    }]
                }
            }
        });
    </script>
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