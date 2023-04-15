<?php
// Start session
session_start();
ob_start();
?>
<?php
$activate = "booking";
@include('header.php')
?>


<!-- Booking -->
<section class="bookingform py-5">
		<div class="container py-md-5 py-3">
			<h1 class="heading text-capitalize text-center">Booking form</h1><br></br>
			<?php include 'sanbay.php'; ?>

			<form style="background-image: url('img/xanhla.png');" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
				<!-- các phần tử trong form -->

				<h1>Tìm kiếm chuyến bay</h1><br></br>
				<label for="diemdi">Điểm đi:</label>
				<select name="diemdi" id="diemdi">
					<?php echo $optionsFrom; ?>
				</select>

				<label for="diemden">Điểm đến:</label>
				<select name="diemden" id="diemden">
					<?php echo $optionsTo; ?>
				</select>

				<label for="loaive">Loại vé:</label>
				<select name="loaive" id="loaive" onchange="toggleNgayVe()">
					<option value="motchieu">Một chiều</option>
					<option value="khuhoi">Khứ hồi</option>
				</select>

				<label for="ngaydi">Ngày đi:</label>
				<input type="date" name="ngaydi" id="ngaydi">

				<label for="ngayve">Ngày về:</label>
				<input type="date" name="ngayve" id="ngayve" disabled>

				<input type="submit" value="Kiểm tra">
			</form>

			<?php
			if ($_SERVER["REQUEST_METHOD"] == "POST") {
				// Lấy dữ liệu từ form
				$diemdi = $_POST['diemdi'];
				$diemden = $_POST['diemden'];
				$ngaydi = $_POST['ngaydi'];
				$ngayve = isset($_POST['ngayve']) ? $_POST['ngayve'] : null;
				$loaive = $_POST['loaive'];

				// Kết nối đến CSDL
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "foxie";

				$conn = mysqli_connect($servername, $username, $password, $dbname);

				// Kiểm tra kết nối
				if (!$conn) {
					die("Kết nối thất bại: " . mysqli_connect_error());
				}


				// Thực hiện truy vấn để lấy dữ liệu giá vé từ bảng giave_chuyenbay
				$sql = "SELECT giave_chuyenbay.id, giave_chuyenbay.id_chuyenbay, giave_chuyenbay.loaive, giave_chuyenbay.giave, giave_chuyenbay.ngaycapnhat, chuyenbay.diemdi, chuyenbay.diemden, chuyenbay.ngaydi, chuyenbay.ngayve, chuyenbay.thoigiandi, chuyenbay.thoigianden 
		FROM giave_chuyenbay 
		JOIN chuyenbay ON giave_chuyenbay.id_chuyenbay = chuyenbay.id
		WHERE chuyenbay.diemdi = '$diemdi' AND chuyenbay.diemden = '$diemden' AND chuyenbay.ngaydi = '$ngaydi'";


				if ($loaive == "khuhoi") {
					$sql .= " AND chuyenbay.ngayve = '$ngayve'";
				} else {
					$sql .= " AND chuyenbay.ngayve IS NULL";
				}


				$result = mysqli_query($conn, $sql);

				// Kiểm tra kết quả truy vấn
				if (mysqli_num_rows($result) > 0) {
					// Lưu dữ liệu vào session
					$_SESSION['chuyenbay'] = mysqli_fetch_all($result, MYSQLI_ASSOC);
					mysqli_close($conn);
					header('Location: timkiemthu1.php');
					exit;
				} else {
					header('Location: timkiemthu1.php');
				}

				// Đóng kết nối
				mysqli_close($conn);
			}

			ob_end_flush();
			?>

		</div>
	</section>
</body>
<script>
	function toggleNgayVe() {
		var loaiVe = document.getElementById("loaive").value;
		var ngayVeInput = document.getElementById("ngayve");

		if (loaiVe === "khuhoi") {
			ngayVeInput.disabled = false;
		} else {
			ngayVeInput.disabled = true;
		}
	}
</script>
</div>
</section>
	
	
<?php
@include('footer.php')
?>