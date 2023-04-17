<?php
// Start session
session_start();
ob_start();
?>
<?php
$activate = "index";
@include('header.php')
?>
		<!-- banner-text -->
		<div id="wrapper">

			<!-- Slideshow 1 -->
			<div class="rslides_container">
				<ul class="rslides" id="slider1">
					<li>
						<div class="banner-img">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-plane"></span>
									<h1>Các chuyến bay nổi bật</h1>
									<a href="booking.php">Đặt ngay</a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img one">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-plane"></span>
									<h4>Sài Gòn</h4>
									<h5 class="mb-5">Hà Nội - Nha Trang</h5>
									<a href="booking.php">Đặt ngay </a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img two">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-plane"></span>
									<h4>Đà Nẵng</h4>
									<h5 class="mb-5">Hà Nội - Sài Gòn </h5>
									<a href="booking.php">Đặt ngay </a>
								</div>
							</div>
						</div>
					</li>
					<li>
						<div class="banner-img three">
							<div class="bs-slider-overlay">
								<div class="banner-info text-center">
									<span class="fas fa-plane"></span>
									<h4>Nha Trang</h4>
									<h5 class="mb-5">Hà Nội - Sài Gòn</h5>
									<a href="booking.php">Đặt ngay </a>
								</div>
							</div>
						</div>
					</li>

				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->

	
<<!-- about -->
<section class="prices py-5">
    <div class="container py-lg-5 py-3">
        <h3 class="heading text-capitalize text-center">Welcome</h3>
        <h5 class="heading mb-5 text-center">Chào mừng bạn đến với dịch vụ chuyến bay uy tín nhất Việt Nam </h5>
        <div class="about-head text-center ">
            <div class="row about-grids-top mb-5">
                <div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
                    <i class="fas fa-money-bill-alt" aria-hidden="true"></i>
                    <h4>Khuyến mãi </h4>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 about-grid p-0">
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <h4>Đặt vé </h4>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mt-sm-0 mt-5 about-grid p-0">
                    <i class="fa fa-road" aria-hidden="true"></i>
                    <h4>Lộ trình </h4>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
                    <i class="fa fa-plane" aria-hidden="true"></i>
                    <h4>Chuyến bay </h4>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
                    <i class="fa fa-cogs" aria-hidden="true"></i>
                    <h4>Dịch vụ </h4>
                </div>
                <div class="col-lg-2 col-sm-4 col-6 mt-lg-0 mt-5 about-grid p-0">
                    <i class="fa fa-smile" aria-hidden="true"></i>
                    <h4>Hỗ trợ </h4>
                </div>
            </div>
            <div class="row about-grids-bottom text-left">
                <div class="col-md-4 mb-md-0 mb-5 about-bottom-grid">
                    <h4 class="mb-4">Đến với Foxie-Booking, hành khách thân yêu sẽ được trải nghiệm với những chuyến bay
                        an toàn
                        và chất lượng.</h4>
                    <a href="about.html"> Đặt vé ngay </a>
                </div>
                <div class="col-md-4 about-bottom-grid">
                    <p>Tự hào là hãng hàng không với chất lượng dịch vụ được quý hành khách đánh giá cao. Chúng tôi luôn
                        sẵn sàng đem đến những chuyến bay với lộ trình cụ thể. Phù hợp với đa dạng đối tượng hành khách.
                        Đáp ứng nhu cầu đi du lịch, công tác, .... </p>
                </div>
                <div class="col-md-4 about-bottom-grid">
                    <p>FOXIE đồng hàng với bạn theo những chuyến bay dài, ngắn. Bất kể là xa hay gần, đã đồng hành cùng
                        bạn nghĩa là mang đến những trải nghiệm tốt nhất! Bên cạnh đó để tri ân những hành khách đã gắn
                        bó lâu dài cùng chúng tôi. FOXIE luôn cung cấp nhiều mã ưu đã dành cho mọi đối tượng! </p>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- //about -->

<!-- Why taxi cab -->
<section class="why">
	<div class="container-fluid p-md-5 p-3">
		<h3 class="heading text-capitalize text-center">Bạn có thể quan tâm</h3>
		<h5 class="heading mb-5 text-center">Thông tin vé</h5>
		<div class="row why-grids">
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid1 text-center">
					<h4 class="mx-auto"><span>Khứ hồi</span></h4>
					<p class="mt-5">Hà Nội - Sài Gòn</p>
					<p>Khởi hành: 01/05/2023</p>
					<p>Giá vé: 1000000.00 VND</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid2 text-center">
					<h4 class="mx-auto"><span>Khứ hồi</span></h4>
					<p class="mt-5">Sài Gòn - Hà Nội</p>
					<p>Khởi hành: 01/05/2023</p>
					<p>Giá vé: 1200000.00 VND</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid3 text-center">
					<h4 class="mx-auto"><span>Khứ hồi</span></h4>
					<p class="mt-5">Đà Nẵng - Nha Trang</p>
					<p>Khởi hành: 02/05/2023</p>
					<p>Giá vé: 900000.00 VND</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-4 grid4 text-center">
					<h4 class="mx-auto"><span>Khứ hồi</span></h4>
					<p class="mt-5">Nha Trang - Đà Nẵng</p>
					<p>Khởi hành: 02/05/2023</p>
					<p>Giá vé: 1500000.00 VND</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-md-0 mb-4 grid5 text-center">
					<h4 class="mx-auto"><span>Một chiều</span></h4>
					<p class="mt-5">Hà Nội - Đà Nẵng</p>
					<p>Khởi hành: 03/05/2023</p>
					<p>Giá vé: 1000000.00 VND</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-md-0 mb-4 grid6 text-center">
					<h4 class="mx-auto"><span>Một chièu</span></h4>
					<p class="mt-5">Đà Nẵng - Hà Nội</p>
					<p>Khởi hành: 03/05/2023</p>
					<p>Giá vé: 800000.00 VND</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 mb-sm-0 mb-4 grid7 text-center">
					<h4 class="mx-auto"><span>Một chiều</span></h4>
					<p class="mt-5">Nha Trang - Sài Gòn</p>
					<p>Khởi hành: 08/05/2023</p>
					<p>Giá vé: 3000000.00 VND</p>
				</div>
			</div>
			<div class="col-lg-3 col-md-4 col-sm-6">
				<div class="py-5 px-2 grid8 text-center">
					<h4 class="mx-auto"><span>Một chiều</span></h4>
					<p class="mt-5">Sài Gòn - Nha Trang</p>
					<p>Khởi hành: 09/05/2023</p>
					<p>Giá vé: 3500000.00 VND</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- //Why taxi cab -->

<section class="prices py-5">
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

<!-- Our prices -->
<!-- <section class="prices py-5">
	<div class="container py-lg-5 py-3">
		<h3 class="heading text-capitalize text-center">Our Pricing</h3>
		<h5 class="heading mb-5 text-center">Taxi Cab</h5>
		<div class="row pricing-grids">
			<div class="col-lg-3 col-md-6 price-grid">
				<h3 class="mb-4">Micro Taxi -- <span class="">2$</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<p> Curabitur eu neque nec ante sagittis dapibus et eu purus. Proin et erat tempus, tempor sapien ac, faucibus nibh.</p>
				<ul class="d-flex mt-3">
					<li class="mr-3">2 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-md-0 mt-5 price-grid">
				<h3 class="mb-4">Mini Taxi -- <span class="">3$</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<p> Curabitur eu neque nec ante sagittis dapibus et eu purus. Proin et erat tempus, tempor sapien ac, faucibus nibh.</p>
				<ul class="d-flex mt-3">
					<li class="mr-3">2 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">2 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 price-grid">
				<h3 class="mb-4">Prime Taxi -- <span class="">4$</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<p> Curabitur eu neque nec ante sagittis dapibus et eu purus. Proin et erat tempus, tempor sapien ac, faucibus nibh.</p>
				<ul class="d-flex mt-3">
					<li class="mr-3">3 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">2 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
				</ul>
			</div>
			<div class="col-lg-3 col-md-6 mt-lg-0 mt-5 price-grid">
				<h3 class="mb-4">Sedan Taxi -- <span class="">5$</span></h3>
				<h4 class="my-3">Small fares for short rides</h4>
				<p> Curabitur eu neque nec ante sagittis dapibus et eu purus. Proin et erat tempus, tempor sapien ac, faucibus nibh.</p>
				<ul class="d-flex mt-3">
					<li class="mr-3">4 <i class="fas fa-male" aria-hidden="true"></i></li>
					<li class="mr-3">3 <i class="fas fa-suitcase" aria-hidden="true"></i></li>
					<li class="mr-3">1 <i class="fas fa-wifi" aria-hidden="true"></i></li>
				</ul>
			</div>
		</div>
	</div>
</section> -->
<!-- //Our prices -->


<?php
@include('footer.php')
?>
			


