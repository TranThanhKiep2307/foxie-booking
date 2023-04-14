<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Quản lý chuyến bay</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<header>
		<h1>Quản lý chuyến bay</h1>
		<nav>
			<ul>
				<li><a href="dashboard.php">Trang chủ</a></li>
				<li><a href="flights.php">Quản lý chuyến bay</a></li>
				<li><a href="bookings.php">Quản lý đặt vé</a></li>
			</ul>
		</nav>
		<div class="user">
			<p>Xin chào, <?php echo $_SESSION['username']; ?>!</p>
			<a href="logout.php">Đăng xuất</a>
		</div>
	</header>
	<main>
		<h2>Thêm chuyến bay mới</h2>
		<form method="post" action="">
			<label for="from">Nơi đi:</label>
			<input type="text" name="from" id="from" required>
			<label for="to">Nơi đến:</label>
			<input type="text" name="to" id="to" required>
			<label for="depart_date">Ngày đi:</label>
			<input type="date" name="depart_date" id="depart_date" required>
			<label for="depart_time">Giờ đi:</label>
			<input type="time" name="depart_time" id="depart_time" required>
			<label for="price">Giá vé:</label>
			<input type="number" name="price" id="price" required>
			<button type="submit" name="add_flight">Thêm</button>
		</form>
		<h2>Danh sách chuyến bay</h2>
		<table>
			<thead>
				<tr>
					<th>ID</th>
					<th>Nơi đi</th>
					<th>Nơi đến</th>
					<th>Ngày đi</th>
					<th>Giờ đi</th>
					<th>Giá vé</th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<?php
				$sql = "SELECT * FROM flights";
				$result = mysqli_query($con, $sql);
				while ($row = mysqli_fetch_assoc($result)) {
					echo "<tr>";
					echo "<td>{$row['id']}</td>";
					echo "<td>{$row['from_place']}</td>";
					echo "<td>{$row['to_place']}</td>";
					echo "<td>{$row['depart_date']}</td>";
					echo "<td>{$row['depart_time']}</td>";
					echo "<td>{$row['price']}</td>";
					echo "<td><a href='edit_flight.php?id={$row['id']}'>Sửa</a> | <a href='delete_flight.php?id={$row['id']}' onclick='return confirm(\"Bạn chắc chắn muốn xoá chuyến
bay này?")'>Xoá</a></td>";
echo "</tr>";
}
?>
</tbody>
</table>
</main>
<footer>
<p>© 2023 - Tất cả các quyền được bảo lưu</p>
</footer>

</body>
</html>