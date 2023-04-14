<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['username'])) {
	header('Location: login.php');
	exit();
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Quản trị viên</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div class="container">
		<h1>Quản trị viên</h1>
		<p>Xin chào, <?php echo $_SESSION['username']; ?>! Bạn đã đăng nhập thành công.</p>
		<p><a href="logout.php">Đăng xuất</a></p>
	</div>
</body>
</html>
