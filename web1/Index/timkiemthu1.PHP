<?php
// Start session
session_start();
?>
<?php
$activate = "about";
@include('header.php')
?>


<!-- about -->
<section class="about py-5">
    <div class="container py-lg-5 py-3">
        <h3 class="heading text-capitalize text-center">Kết quả tìm kiếm chuyến bay</h3>
        
	<!-- //Booking -->


<?php
if (isset($_SESSION['chuyenbay'])) {
	$chuyenbay = $_SESSION['chuyenbay'];
	echo "<table>";
	echo "<thead>";
	echo "<tr>";
	echo "<th>STT</th>";
	echo "<th>Điểm đi</th>";
	echo "<th>Điểm đến</th>";
	echo "<th>Giờ khởi hành</th>";
	echo "<th>Giờ đến</th>";
	echo "<th>Giá vé</th>";
	echo "<th>Đặt vé</th>";	
	echo "</tr>";
	echo "</thead>";
	echo "<tbody>";
	foreach ($chuyenbay as $key => $value) {
		echo "<tr>";
		echo "<td>" . ($key + 1) . "</td>";
		echo "<td>" . $value['diemdi'] . "</td>";
		echo "<td>" . $value['diemden'] . "</td>";
		echo "<td>" . (isset($value['thoigiandi']) ? $value['thoigiandi'] : '') . "</td>";
		echo "<td>" . (isset($value['thoigianden']) ? $value['thoigianden'] : '') . "</td>";
		echo "<td>" . number_format($value['giave'], 0, ',', '.') . " VND</td>";
		echo "<td><a href='datve.php?id=" . $key . "'>Đặt vé</a></td>";

		echo "</tr>";
	}
	echo "</tbody>";
	echo "</table>";
	unset($_SESSION['chuyenbay']);
} else {
	echo '<p style="color: red;">Không có chuyến bay nào cả.</p>';
}

?>

    </div>
</section>
<!-- //about -->

<!-- counter -->
<div class="services-bottom stats py-5">
    <div class="container py-lg-5 pb-3">
        <h2 class="heading text-capitalize text-center">NỔI BẬT VỚI </h2>
        <h5 class="heading mb-5 text-center">

        </h5>
        <div class="row wthree-agile-counter">
            <div class="col-sm-3 col-6 w3_agile_stats_grid-top">
                <div class="w3_agile_stats_grid">
                    <div class="agile_count_grid_left">
                        <span class="fa fa-taxi" aria-hidden="true"></span>
                    </div>
                    <div class="agile_count_grid_right">
                        <p class="counter">Dịch vụ </p>
                    </div>
                    <div class="clearfix"> </div>
                    <!-- <h4>No: of Cabs</h4> -->
                </div>
            </div>
            <div class="col-sm-3 col-6 w3_agile_stats_grid-top">
                <div class="w3_agile_stats_grid">
                    <div class="agile_count_grid_left">
                        <span class="fa fa-road" aria-hidden="true"></span>
                    </div>
                    <div class="agile_count_grid_right">
                        <p class="counter">Lộ trình </p>
                    </div>
                    <div class="clearfix"> </div>
                    /
                </div>
            </div>
            <div class="col-sm-3 col-6 mt-sm-0 mt-5 w3_agile_stats_grid-top">
                <div class="w3_agile_stats_grid">
                    <div class="agile_count_grid_left">
                        <span class="fas fa-money-bill-alt" aria-hidden="true"></span>
                    </div>
                    <div class="agile_count_grid_right">
                        <p class="counter">Ưu đãi</p>
                    </div>
                    <div class="clearfix"> </div>
                    <!-- <h4>Low Fares</h4> -->
                </div>
            </div>
            <div class="col-sm-3 col-6 mt-sm-0 mt-5 w3_agile_stats_grid-top">
                <div class="w3_agile_stats_grid">
                    <div class="agile_count_grid_left">
                        <span class="fa fa-cogs" aria-hidden="true"></span>
                    </div>
                    <div class="agile_count_grid_right">
                        <p class="counter">Hỗ trợ </p>
                    </div>
                    <div class="clearfix"> </div>
                    <!-- <h4>24/7 Service</h4> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- //counter -->

<!-- Cars slider -->
<section class="food-Slider py-5">
    <div class="container py-lg-5">
        <h3 class="heading text-capitalize text-center">Về chuyến bay của chúng tôi </h3>
        <h2 class="heading2  text-center"> Gợi ý</h2>

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 slidering">
                            <div class="thumbnail"><img src="images/vungtau.jpg" alt="Image" style="max-width:100%;">
                            </div>
                            <h5 class="my-2 text-center text-uppercase"> Vũng Tàu </h5>
                        </div>
                        <div class="col-md-4 col-sm-6 slidering">
                            <div class="thumbnail"><img src="images/hanoi.jpg" alt="Image" style="max-width:100%;">
                            </div>
                            <h5 class="my-2 text-center text-uppercase"> Hà Nội </h5>
                        </div>
                        <div class="col-md-4 col-sm-6 slidering">
                            <div class="thumbnail"><img src="images/HUE.jpg" alt="Image" style="max-width:100%;"></div>
                            <h5 class="my-2 text-center text-uppercase"> Huế </h5>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 slidering">
                            <div class="thumbnail"><img src="images/SG.png" alt="Image" style="max-width:100%;"></div>
                            <h5 class="my-2 text-center text-uppercase">TP Hồ Chí Minh </h5>
                        </div>
                        <div class="col-md-4 col-sm-6 slidering">
                            <div class="thumbnail"><img src="images/NHATRANG.jpg" alt="Image" style="max-width:100%;">
                            </div>
                            <h5 class="my-2 text-center text-uppercase">Nha Trang </h5>
                        </div>
                        <div class="col-md-4 col-sm-6 slidering">
                            <div class="thumbnail"><img src="images/dannang.jpg" alt="Image" style="max-width:100%;">
                            </div>
                            <h5 class="my-2 text-center text-uppercase"> Đà Nẵng </h5>
                        </div>
                    </div>
                </div>

            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="fa fa-chevron-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="fa fa-chevron-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<!-- //Cars slider -->

<!-- booking -->
<section class="container py-3">
    <div class="booking text-center p-sm-5 py-5 px-3">
        <h3>Đặt vé ngay </h3>
        <p class="my-4">Lộ trình cụ thể cùng với đa dạng danh sách ghế ngồi cho hành khách tự do lựa chọn.
            Hãy nhanh tay chọn ngay cho mình một vị trí để bắt đầu chuyến bay! </p>
        <a href="booking.html">Book Now</a>
    </div>
</section>
<!-- booking -->

<!-- team -->
<section class="wthree-row py-5">
    <div class="container py-md-5 py-3">
        <h3 class="heading text-capitalize text-center">FOXIE- FLY </h3>
        <h5 class="heading mb-5 text-center">Về đội ngũ </h5>
        <div class="row text-center">
            <div class="col-lg-3 col-6 team-grids">
                <div class="team-effect">
                    <img src="./images/Phát.jpg" alt="img" class="img-fluid">
                </div>
                <!-- team text -->
                <div class="footerv2-w3ls mt-3">
                    <h4>Nguyễn Lộc Phát </h4>
                    <p class="my-2">Leader</p>
                    <p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1234</p>
                </div>
                <!-- //team text -->
            </div>
            <div class="col-lg-3 col-6 team-grids">
                <div class="team-effect">
                    <img src="images/kiep.jpg" alt="img" class="img-fluid">
                </div>
                <!-- team text -->
                <div class="footerv2-w3ls mt-3">
                    <h4>Trần Thanh Kiệp </h4>
                    <p class="my-2">Member</p>
                    <p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1235</p>
                </div>
                <!-- //team text -->
            </div>
            <div class="col-lg-3 col-6 team-grids mt-lg-0 mt-5">
                <div class="team-effect">
                    <img src="images/han11.jpg" alt="img" class="img-fluid">
                </div>
                <!-- team text -->
                <div class="footerv2-w3ls mt-3">
                    <h4>Nguyễn Ngọc Kiều Hân </h4>
                    <p class="my-2">Member</p>
                    <p><i class="fas fa-phone" aria-hidden="true"></i> 12(00) 123 1236</p>
                </div>
                <!-- //team text -->
            </div>
            <div class="col-lg-3 col-6 team-grids mt-lg-0 mt-5">
                <div class="team-effect">
                    <img src="images/thu11.jpg" alt="img" class="img-fluid">
                </div>
                <!-- team text -->
                <div class="footerv2-w3ls mt-3">
                    <h4>Nguyễn Thị Phương Thư</h4>
                    <p class="my-2">Member</p>
                    <p><i class="fas fa-phone" aria-hidden="true"></i>12(00) 123 1236</p>
                </div>
                <!-- //team text -->
            </div>
        </div>
    </div>
</section>
<!-- //team -->

<?php
@include('footer.php')
?>