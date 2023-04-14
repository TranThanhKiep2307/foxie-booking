<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>DASHBOARD</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
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

    // Thực hiện truy vấn để sửa chuyến bay trong cơ sở dữ liệu
    $sql = "UPDATE chuyenbay SET diemdi='$diemdi', diemden='$diemden', ngaydi='$ngaydi', thoigiandi='$thoigiandi', thoigianden='$thoigianden' WHERE ID='$ID'";

    if ($conn->query($sql) === TRUE) {
      echo "Cập nhật chuyến bay thành công";
    } else {
      echo "Lỗi: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
  }
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
                        <li><a href="#">Bình luận</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rightColumn">
            <main>
			<h1>Cập nhật chuyến bay</h1>
  <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="ID">ID:</label>
    <input type="text" id="ID" name="ID"><br>

    <label for="diemdi">Điểm đi:</label>
    <input type="text" id="diemdi" name="diemdi"><br>

    <label for="diemden">Điểm đến:</label><input type="text" id="diemden" name="diemden"><br>

<label for="ngaydi">Ngày đi:</label>
<input type="date" id="ngaydi" name="ngaydi"><br>

<label for="thoigiandi">Thời gian đi:</label>
<input type="time" id="thoigiandi" name="thoigiandi"><br>

<label for="thoigianden">Thời gian đến:</label>
<input type="time" id="thoigianden" name="thoigianden"><br>

<input type="submit" value="Cập nhật">
</form>
            </main>
        </div>
    </div>
</body>
<footer>
    <p>&copy; 2023 - Trang quản trị bán vé máy bay</p>
</footer>

</html>
  ?>