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
                    <li><a href="themchuyenbay.php">Thêm vé</a></li>
                        <li><a href="hienthichuyenbay.php">Danh sách chuyến bay</a></li>
                        <li><a href="#">Bình luận</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="rightColumn">
            <main>
                <form method="post" action="chuyenbay.php">

                <label>ID:</label>
		<input type="number" name="ID" required><br><br>
		<label>Điểm đi:</label>
		<input type="text" name="diemdi" required><br><br>
		<label>Điểm đến:</label>
		<input type="text" name="diemden" required><br><br>
		<label>Ngày đi:</label>
		<input type="date" name="ngaydi" required><br><br>
		<label>Thời gian đi:</label>
		<input type="time" name="thoigiandi" required><br><br>
		<label>Thời gian đến:</label>
		<input type="time" name="thoigianden" required><br><br>
		<input type="submit" name="submit" value="Thêm">
                </form>
            </main>
        </div>
    </div>
</body>
<footer>
    <p>&copy; 2023 - Trang quản trị bán vé máy bay</p>
</footer>

</html>