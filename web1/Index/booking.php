<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>Taxi Cab Transportation Category Flat Bootstrap Responsive Website Template | Booking :: W3layouts</title>
	
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<meta name="keywords" content="Taxi Cab Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->
	
	<!-- Stylesheet -->
	<link href="css/wickedpicker.css" rel="stylesheet" type='text/css' media="all" />
	<link rel="stylesheet" href="css/jquery-ui.css" />

	<!-- css files -->
	<link rel="stylesheet" href="css/bootstrap.css"> <!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" /> <!-- Style-CSS --> 
	<link rel="stylesheet" href="css/fontawesome-all.css"> <!-- Font-Awesome-Icons-CSS -->
	<!-- //css files -->

	<!-- web-fonts -->
	<link href="//fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=latin-ext" rel="stylesheet">
	<!-- //web-fonts -->
	
</head>

<body>

<!--/banner-->
<div class="top-bar_sub_w3layouts container-fluid">
		<div class="row">
			
			<div class="col-md-4 col-sm-6 log-icons mt-2">
				<p class="py-2"><i class="fas fa-phone"></i> Call Taxi : 12(00) 123 1234</p>
			</div>
			
			<div class="col-md-4 col-sm-6 logo">
				<a class="navbar-brand" href="index.php">
					<i class="fas fa-taxi"></i> Taxi Cab</a>
			</div>
			
			
			<div class="col-md-4 top-forms mt-md-3 mt-2 mb-md-0 mb-3">
				<span class="mx-lg-4 mx-md-2  mx-1">
					<a href="#" data-toggle="modal" aria-pressed="false" data-target="#exampleModal">
						<i class="fas fa-lock"></i> Sign In</a>
				</span>
				<span>
					<a href="#" data-toggle="modal" data-target="#exampleModal1" >
						<i class="fas fa-user"></i> Register</a>
				</span>
			</div>
		</div>
	</div>
	
	<div class="banner" id="home">
		<!-- header -->
		header>
			<nav class="navbar navbar-expand-lg navbar-light bg-light top-header">
				<button class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				    aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="collapse navbar-collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item">
							<a class="nav-link ml-lg-0" href="index.php">Home
								<span class="sr-only">(current)</span>
							</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="about.php">About</a>
						</li>
						
						<li class="nav-item">
							<a class="nav-link" href="booking.php">Booking</a>
						</li>
						<li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
							    aria-expanded="false">
								Dropdown
							</a>
							<div class="dropdown-menu" aria-labelledby="navbarDropdown">
								<a class="dropdown-item text-center" href="about.php">About</a>
							

							</div>
						</li>
						<li class="nav-item active">
							<a class="nav-link" href="contact.php">Contact</a>
						</li>
					</ul>

				</div>
			</nav>
		</header>
		<!-- //header -->
	</div>
	<!-- //banner -->

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
	
	
<!--footer-->
<footer class="py-sm-5 py-4 px-md-5 px-3">
	<div class="container-fluid pt-lg-5">
		<div class="row">
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 footer-grid-agileits-w3ls1 text-left">
				<h3 class="mb-sm-5 mb-4 mt-sm-0 mt-4">About Company</h3>	
				<p>Vestibulum vitae libero consectetur, orn areeros id, congue metus. Aliquam erat volutpat. Donec rhoncus risus vitae ullam corper pretium. Duis vitae nisl neque. Aliquam tincidunt, tellus quis hendrerit tincidunt congue metus. </p>
				<a href="#" class="read">Know More <i class="fas fa-caret-right"></i></a>
			</div>
			<div class="col-lg-3 col-sm-6 mb-lg-0 mb-5 footer-grid-agileits-w3ls1 text-left">
				<h3 class="mb-sm-5 mb-4">Locate Us</h3>	
				<ul class="w3ls-footer-bottom-list">
					<li> <span class="fas fa-map-marker"></span> 3481 Jack Street Beverly Jack Hills<span> 90210 Block, USA </span></li>
					<li> <span class="fas fa-envelope"></span> <a href="mailto:name@example.com"> mail@example.com</a> </li>
					<li> <span class="fas fa-phone"></span> +112 367 896 2449 </li>
					<li> <span class="fas fa-fax"></span> +112 367 896 2449 </li>
					<li> <span class="fas fa-globe"></span> <a href="#"> www.websitename.com</a> </li>
					<li> <span class="fas fa-clock"></span> Office Time  : 8:00 a.m - 6:00 p.m</li>
				</ul>
			</div>
			<div class="col-lg-3 col-sm-6 mb-sm-0 mb-5 footer-grid-agileits-w3ls text-left">
				<div class="tech-btm">
					<h3 class="mb-sm-5 mb-4">Latest Posts</h3>
					<div class="blog-grids row mb-3">
						<div class="col-4 pr-0 blog-grid-left">
							<a href="#">
								<img src="images/blog1.jpg" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-8 blog-grid-right">

							<h5>
								<a href="#">Pellentesque dui, non felis. Maecenas male non felis </a>
							</h5>
							<div class="sub-meta">
								<span>
									<i class="far fa-clock"></i> 19 Apr, 2018</span>
							</div>
						</div>
						
					</div>
					<div class="blog-grids row mb-3">
						<div class="col-4 pr-0 blog-grid-left">
							<a href="#">
								<img src="images/blog2.jpg" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-8 blog-grid-right">

							<h5>
								<a href="#">Pellentesque dui, non felis. Maecenas male non felis </a>
							</h5>
							<div class="sub-meta">
								<span>
									<i class="far fa-clock"></i> 20 Apr, 2018</span>
							</div>
						</div>
						
					</div>
					<div class="blog-grids row">
						<div class="col-4 pr-0 blog-grid-left">
							<a href="#">
								<img src="images/blog3.jpg" class="img-fluid" alt="">
							</a>
						</div>
						<div class="col-8 blog-grid-right">

							<h5>
								<a href="#">Pellentesque dui, non felis. Maecenas male non felis </a>
							</h5>
							<div class="sub-meta">
								<span>
									<i class="far fa-clock"></i> 21 Apr, 2018</span>
							</div>
						</div>
						
					</div>
				</div>
			</div>
			<!-- subscribe -->
			<div class="col-lg-3 col-sm-6 subscribe-main footer-grid-agileits-w3ls text-left">
				<h3 class="mb-sm-5 mb-4">Newsletter</h3>
				<div class="subscribe-main text-left">
					<div class="subscribe-form">
						<form action="#" method="post" class="subscribe_form">
							<input class="form-control" type="email" placeholder="Enter Your Email..." required="">
							<button type="submit" class="btn1 btn-primary submit"><i class="fas fa-paper-plane" aria-hidden="true"></i></button>
						</form>
				   </div>
				</div>
				<!-- //subscribe -->
				<div class="footer-social">
				<div class="copyrighttop">
				<h3 class="mb-sm-5 mb-4">Stay In Touch</h3>
					<ul>
						<li class="mr-1">
							<a class="facebook" href="#">
								<i class="fab fa-facebook-f"></i>
							</a>
						</li>
						<li class="mr-1">
							<a class="facebook" href="#">
								<i class="fab fa-twitter"></i>
							</a>
						</li>
						<li class="mr-1">
							<a class="facebook" href="#">
								<i class="fab fa-google-plus-g"></i>
							</a>
						</li>
						<li class="mr-1">
							<a class="facebook" href="#">
								<i class="fab fa-pinterest-p"></i>
							</a>
						</li>
						<li>
							<a class="facebook" href="#">
								<i class="fab fa-linkedin-in"></i>
							</a>
						</li>
					</ul>

				</div>
			</div>
			</div>
		</div>
		<!-- copyright -->
		<div class="footer-cpy text-center pt-sm-5 mt-sm-5 mt-4 pt-3">
			<div class="w3layouts-agile-copyrightbottom">
				<p>© 2018 Taxi Cab. All Rights Reserved | Design by
					<a href="http://w3layouts.com/">W3layouts</a>
				</p>

			</div>
		</div>
		<!-- //copyright -->
	</div>
</footer>
<!-- //footer -->
			
<!-- login and register modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Sign In to your account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">User Name</label>
						<input type="text" class="form-control" placeholder="User Name" name="Name" id="recipient-name" required="">
					</div>
					<div class="form-group">
						<label for="password" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="Password" id="password" required="">
					</div>
					<div class="row sub-w3l my-3">
						<div class="col sub-agile">
							<input type="checkbox" id="brand1" value="">
							<label for="brand1" class="text-white">
								<span></span>Remember me?</label>
						</div>
						<div class="col forgot-w3l text-right">
							<a href="#" class="text-white">Forgot Password?</a>
						</div>
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Sign In">
					</div>
					<p class="text-center dont-do text-white mt-3">Don't have an account?
						<a href="#" data-toggle="modal" data-target="#exampleModal1" class="text-white">
							Register Now</a>
					</p>
				</form>
			</div>
		</div>
	</div>
</div>
<div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel1">Register your account</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<form action="#" method="post">
					<div class="form-group">
						<label for="recipient-name" class="col-form-label">User Name</label>
						<input type="text" class="form-control" placeholder="User Name" name="Name" id="recipient-rname" required="">
					</div>
					<div class="form-group">
						<label for="recipient-email" class="col-form-label">Email</label>
						<input type="email" class="form-control" placeholder="Email" name="Email" id="recipient-email" required="">
					</div>
					<div class="form-group">
						<label for="password1" class="col-form-label">Password</label>
						<input type="password" class="form-control" placeholder="Password" name="Password" id="password1" required="">
					</div>
					<div class="form-group">
						<label for="password2" class="col-form-label">Confirm Password</label>
						<input type="password" class="form-control" placeholder="Confirm Password" name="Confirm Password" id="password2" required="">
					</div>
					<div class="sub-w3l">
						<div class="sub-agile">
							<input type="checkbox" id="brand2" value="">
							<label for="brand2" class="mb-3">
								<span></span>I Accept to the Terms & Conditions</label>
						</div>
					</div>
					<div class="right-w3l">
						<input type="submit" class="form-control" value="Register">
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<!-- //login and register modal -->

<!-- js-scripts -->		

	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script> <!-- Necessary-JavaScript-File-For-Bootstrap --> 
	<!-- //js -->
	
	<!-- Time -->
	<script type="text/javascript" src="js/wickedpicker.js"></script>
	<script type="text/javascript">
		$('.timepicker').wickedpicker({
			twentyFour: false
		});
	</script>
	<!--// Time -->
	<!-- Calendar -->
	<script src="js/jquery-ui.js"></script>
	<script>
		$(function () {
			$("#datepicker,#datepicker1,#datepicker2,#datepicker3").datepicker();
		});
	</script>
	<!-- //Calendar -->
	
	<!-- carousel -->
	<script src="js/owl.carousel.js"></script>
	<script>
		$(document).ready(function () {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 10,
				responsiveClass: true,
				responsive: {
					0: {
						items: 1,
						nav: true
					},
					600: {
						items: 1,
						nav: false
					},
					900: {
						items: 2,
						nav: false
					},
					1000: {
						items: 3,
						nav: true,
						loop: false,
						margin: 20
					}
				}
			})
		})
	</script>
	<!-- //carousel -->

	<!--slider-->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			// Slideshow 1
			$("#slider1").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 500,
				namespace: "centered-btns"
			});
		});
	</script>
	<!--//slider-->
	
	<!-- start-smoth-scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function($) {
			$(".scroll").click(function(event){		
				event.preventDefault();
				$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
			});
		});
	</script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- start-smoth-scrolling -->
	
<!-- //js-scripts -->

</body>
</html>