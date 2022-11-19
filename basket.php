<?php 
	    // include('server.php');
		include('listProduct.php');
		session_start();
		$_SESSION['page'] = "basket.php";
		error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css?ver=5.13.3'/>
	<link rel="stylesheet" href="./css_file/index.css">


    <title>shopping cart</title>
  </head>
  <body>
  <div class="container-fluid py-2 bg-info pad h d-flex align-items-center justify-content-center">
        <h1 class="text-center">Book'n Stationery SHOP</h1>
    </div>

  <?php 

	
    if (!$_SESSION['username'] && !$_SESSION['ID']){
      include('login.php');
    }else{
      include('logged.php');
    }

	?>
	<div class="container">
	
	</div>

<div class="container-fluid py-4">

	<div class="card">
		<div class="row">
			<div class="col-md-8 cart">
				<div class="title">
					<div class="row">
						<div class="col"><h4><b>ตะกร้าสินค้า</b></h4></div>
						<div class="col align-self-center text-right text-muted">3 ชิ้น</div>
					</div>
				</div>    
				<div class="row border-top">
					<div class="row main align-items-center">
						<div class="col-2"><img class="img-fluid" src="https://i.pinimg.com/originals/7d/34/94/7d3494dd01357f3d68e06b020c32eaf8.png"></div>
						<div class="col">
							<div class="row">Book#1</div>
						</div>
						<div class="col">
							<a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
						</div>
						<div class="col">44.00<span class="close">&#10005;</span></div>
					</div>
				</div>
				<div class="row border-top">
					<div class="row main align-items-center">
						<div class="col-2"><img class="img-fluid" src="https://i.pinimg.com/originals/7d/34/94/7d3494dd01357f3d68e06b020c32eaf8.png"></div>
						<div class="col">
							<div class="row">Book#2</div>
						</div>
						<div class="col">
							<a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
						</div>
						<div class="col">44.00<span class="close">&#10005;</span></div>
					</div>
				</div>
				<div class="row border-top">
					<div class="row main align-items-center">
						<div class="col-2"><img class="img-fluid" src="https://i.pinimg.com/originals/7d/34/94/7d3494dd01357f3d68e06b020c32eaf8.png"></div>
						<div class="col">
							<div class="row">Book#3</div>
						</div>
						<div class="col">
							<a href="#">-</a><a href="#" class="border">1</a><a href="#">+</a>
						</div>
						<div class="col">44.00<span class="close">&#10005;</span></div>
					</div>
				</div>
				<div class="back-to-shop"><a href="#">&leftarrow; Back to shop</a></div>
				<div class="title">
					<div class="row">
						<div class="col"><h4><b>วิธีชำระเงิน</b></h4></div>
						
					</div>
				</div> 
			</div>
			<div class="col-md-4 summary">
				<div class="text-right"><h5><b>ยอดรวม</b></h5></div>
				<hr>
				<div class="row">
					<div class="col">มูลค่า</div>
					<div class="col text-right">132.00 บาท</div>
				</div>
				<form class="basketForm">
					<div class="txtform">การจัดส่ง</div>
					<select>
						<option class="text-muted">จัดส่งแบบธรรมดา - 5.00 บาท</option>
						<option class="text-muted">ส่งด่วน ems - 55.00 บาท</option>
					</select>
					<div class="txtform">คูปอง</div>
					<input placeholder="Enter your code" class="basketInput">
					<button style="margin: 0.5vh 0;" class="basketBUT">ใช้คูปอง</button>

					<div class="txtform">ที่อยู่</div>
					<input placeholder="Enter your Address" class="basketInput">
				</form>
				<div class="row" style="border-top: 1px solid rgba(0,0,0,.1); padding: 2vh 0;">
					<div class="col">รวม</div>
					<div class="col text-right">137.00 บาท</div>
				</div>
				<button class="basketBUT">ชำระเงิน</button>
			</div>
		</div>
		<div></div>
	</div>

	</div>
	<script
      src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
      integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
	<script src="./js_file/modals.js"></script>
    <script src="./js_file/slider.js"></script>
  </body>
</html>
