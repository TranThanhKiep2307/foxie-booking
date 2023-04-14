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
			<form action="thongke.php" method="POST">
  <label for="start_date">Start date:</label>
  <input type="date" id="start_date" name="start_date">

  <label for="end_date">End date:</label>
  <input type="date" id="end_date" name="end_date">

  <button type="submit">Submit</button>
</form>

            </main>
        </div>
    </div>
</body>
<footer>
    <p>&copy; 2023 - Trang quản trị bán vé máy bay</p>
</footer>

</html>