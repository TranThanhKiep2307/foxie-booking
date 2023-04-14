<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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
                        <li><a href="#">Thêm vé</a></li>
                        <li><a href="#">Thống kê</a></li>
                        <li><a href="#">Bình luận</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rightColumn">
            <main>
                <form method="post" action="chuyenbay.php">

                <h1>Danh sách chuyến bay</h1>
	<table>
		<tr>
			<th>ID</th>
			<th>Điểm đi</th>
			<th>Điểm đến</th>
			<th>Ngày đi</th>
			<th>Thời gian đi</th>
			<th>Thời gian đến</th>
		</tr>
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

		// Lấy dữ liệu từ cơ sở dữ liệu và hiển thị ra bảng
		$sql = "SELECT * FROM chuyenbay";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
			// Hiển thị dữ liệu từ cơ sở dữ liệu ra bảng
			while($row = $result->fetch_assoc()) {
				echo "<tr>";
				echo "<td>" . $row["ID"] . "</td>";
				echo "<td>" . $row["diemdi"] . "</td>";
				echo "<td>" . $row["diemden"] . "</td>";
				echo "<td>" . $row["ngaydi"] . "</td>";
				echo "<td>" . $row["thoigiandi"] . "</td>";
				echo "<td>" . $row["thoigianden"] . "</td>";
				echo "</tr>";
			}
		} else {
			echo "Không có chuyến bay nào";
		}
		$conn->close();
		?>
	</table>
                </form>
            </main>
        </div>
    </div>
</body>
<footer>
    <p>&copy; 2023 - Trang quản trị bán vé máy bay</p>
</footer>

</html>