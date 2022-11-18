<?php
    // include('server.php');
    session_start();

    error_reporting(0);
?>

  
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"> -->
  <link rel="stylesheet" href="./css_file/index.css">
  <link rel="stylesheet" href="./css_file/slider.css">
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css?ver=5.13.3'/>
  <!-- <link href="http://cdn.phpoll.com/css/animate.css" rel="stylesheet"> -->
  <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
  <title>Book'n Stationery SHOP</title>
  
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

  <div class="container-fluid">
    <div class="slider">
      <div class="swiper mySwiper inbox">
        <div class="swiper-wrapper">
          <div class="swiper-slide box-img">
            <div class="back1"></div>
          </div>

          <div class="swiper-slide box-img">
            <div class="back2"></div>
          </div>

          <div class="swiper-slide box-img">
            <div class="back3"></div>
          </div>

          <div class="swiper-slide box-img">
            <div class="back4"></div>
          </div>

          <div class="swiper-slide box-img">
            <div class="back5"></div>
          </div>

          <div class="swiper-slide box-img">
            <div class="back6"></div>
          </div>

          <div class="swiper-slide box-img">
            <div class="back7"></div>
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <section class="featured" id="featured">
          <h1 class="heading"> <span>หนังสือแนะนำ</span> </h1>
          <div class="swiper featured-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide box">
                <div class="image">
                  <img src="https://storage.naiin.com/system/application/bookstore/resource/product/201903/476270/1000217846_front_XXL.jpg?imgname=%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%B4%E0%B8%99%E0%B8%88%E0%B8%B9%E0%B9%80%E0%B8%99%E0%B8%B5%E0%B8%A2%E0%B8%A3%E0%B9%8C-%E0%B9%80%E0%B8%94%E0%B8%A2%E0%B9%8C%E0%B9%84%E0%B8%A5%E0%B8%97%E0%B9%8C-%E0%B8%A5%E0%B8%B1%E0%B8%99%E0%B8%95%E0%B8%B2-%E0%B8%81%E0%B8%B2%E0%B8%A3%E0%B8%B4%E0%B8%99-%E0%B8%81%E0%B8%B1%E0%B8%9A%E0%B8%AA%E0%B8%B1%E0%B8%95%E0%B8%A7%E0%B9%8C%E0%B9%80%E0%B8%A5%E0%B8%B5%E0%B9%89%E0%B8%A2%E0%B8%87%E0%B9%82%E0%B8%A5%E0%B8%81%E0%B8%A1%E0%B8%B2%E0%B8%A2%E0%B8%B2-(Mg)" width="250" height="300" />
                </div>
                <div class="content">
                  <h3>featured books</h3>
                  <div class="price">$15.99 <span>$20.99</span></div>
                  <a href="#" class="btn2">หยิบใส่ตะกร้า</a>
                </div>
              </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </section>
      </div>
    </div>

    <div class="row">
      <div class="col">
        <section class="featured" id="featured">
          <h1 class="heading"> <span>หนังสือขายดี</span> </h1>
          <div class="swiper featured-slider">
            <div class="swiper-wrapper">
              <div class="swiper-slide box">
                <div class="image">
                  <img src="https://storage.naiin.com/system/application/bookstore/resource/product/202210/562076/1000255109_front_XXL.jpg?imgname=SPY-X-FAMILY-%E0%B8%A5.9" width="250" height="300" />
                </div>
                <div class="content">
                  <h3>featured books</h3>
                  <div class="price">$15.99 <span>$20.99</span></div>
                  <a href="#" class="btn2">หยิบใส่ตะกร้า</a>
                </div>
              </div>
            </div>s
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
          </div>
        </section>
      </div>
    </div>

  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="./js_file/modals.js"></script>
  <script src="./js_file/slider.js"></script>



</body>

</html>