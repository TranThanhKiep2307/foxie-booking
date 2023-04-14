<?php
// Kiểm tra thông tin đăng nhập
if (isset($_POST['username']) && isset($_POST['password'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	// Kết nối đến cơ sở dữ liệu
	$conn = mysqli_connect('localhost', 'root', '', 'foxie');

	// Truy vấn đến bảng đăng nhập
	$sql = "SELECT * FROM dangnhap WHERE username='$username' AND password='$password'";
	$result = mysqli_query($conn, $sql);

	// Kiểm tra kết quả trả về
	if (mysqli_num_rows($result) > 0) {
		// Đăng nhập thành công, chuyển hướng đến trang quản trị
		header('Location: dashboard.php');
		exit();
	} else {
		// Thông tin đăng nhập không chính xác
		echo "Tên đăng nhập hoặc mật khẩu không đúng.";
	}
}
?>
