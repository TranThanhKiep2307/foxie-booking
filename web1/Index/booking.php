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
    // Kiểm tra xem có dữ liệu được gửi từ form chưa
    
  // Kiểm tra xem có dữ liệu được gửi từ form chưa
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $diemdi = $_POST['diemdi'];
    $diemden = $_POST['diemden'];
    $ngaydi = $_POST['ngaydi'];
    $ngayve = isset($_POST['ngayve']) ? $_POST['ngayve'] : null;

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

    // Thực hiện truy vấn
    $sql = "SELECT * FROM chuyenbay WHERE diemdi = '$diemdi' AND diemden = '$diemden' AND ngaydi = '$ngaydi'";
    
    if (!is_null($ngayve)) {
        $sql .= " AND ngayve = '$ngayve'";
    }
    
    $result = mysqli_query($conn, $sql);

    // Kiểm tra kết quả truy vấn
    if (mysqli_num_rows($result) > 0) {
        // Hiển thị thông tin các chuyến bay
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
        
            echo "<td>" . $row["diemdi"] . "</td>";
            echo "<td>" . $row["diemden"] . "</td>";
            echo "<td>" . $row["ngaydi"] . "</td>";
            echo "<td>";
        
            if (!empty($row["ngayve"])) {
                echo $row["ngayve"];
            }
        
            echo "</td>";
            echo "</tr>";
        }
        

        echo "</table>";
    } else {
        echo "<p>Không tìm thấy chuyến bay phù hợp.</p>";
    }

    // Đóng kết nối
    mysqli_close($conn);
}

    ?>


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
<!-- //Booking -->
	
	
<?php
@include('footer.php')
?>