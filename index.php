<?php
    // include('server.php');
    session_start();
    $_SESSION['page'] = "index.php";
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
  <style>
    .featured .featured-slider .box .content h3{
    font-size: 1rem;
    color:var(--black);
}
  </style>
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
            <?php 
                  $url = "./jsonFile/data.json";
                  $response = file_get_contents($url);
                  $data = json_decode($response);

                  foreach ($data as $getBooks){

                    if ($getBooks->recommend == "YES"){
                      echo '<div class="swiper-slide box">';
                        echo '<div class="image">';
                          echo '<img src="' .$getBooks->img. '" width="250" height="300" />';
                        echo '</div>';
                        echo '<div class="content">';
                          echo '<h3>' . $getBooks->name . '</h3>';
                          echo '<div class="price">$'. $getBooks->price .'</div>';
                          echo '<a href="#" class="btn2">รายละเอียดสินค้า</a>';
                        echo '</div>';
                      echo '</div>';
                    }
                  }
              ?>
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
              <?php 
                  $url = "./jsonFile/data.json";    
                  $response = file_get_contents($url);
                  $data = json_decode($response);
                  foreach ($data as $getBooks){

                    if ($getBooks->hot == "YES"){
                      echo '<div class="swiper-slide box">';
                        echo '<div class="image">';
                          echo '<img src="' .$getBooks->img. '" width="250" height="300" />';
                        echo '</div>';
                        echo '<div class="content">';
                          echo '<h3 maxlength="10">' . $getBooks->name . '</h3>';
                          echo '<div class="price">$'. $getBooks->price .'</div>';
                          echo '<a href="#" class="btn2">รายละเอียดสินค้า</a>';
                        echo '</div>';
                      echo '</div>';
                    }
                  }
              ?>


              <!-- <div class="swiper-slide box">
                <div class="image">
                  <img src="https://storage.naiin.com/system/application/bookstore/resource/product/202210/562076/1000255109_front_XXL.jpg?imgname=SPY-X-FAMILY-%E0%B8%A5.9" width="250" height="300" />
                </div>
                <div class="content">
                  <h3>featured books</h3>
                  <div class="price">$15.99 <span>$20.99</span></div>
                  <a href="#" class="btn2">รายละเอียดสินค้า</a>
                </div>
              </div> -->
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
          <h1 class="heading"> <span>โปรโมชั่น</span> </h1>
          <div class="swiper featured-slider">
            <div class="swiper-wrapper">
            <?php 
                  $url = "./jsonFile/data.json";
                  $response = file_get_contents($url);
                  $data = json_decode($response);
                  $i = 0;
                  foreach ($data as $getBooks){

                    if ($getBooks->Promotion == "YES"){
                      echo '<div class="swiper-slide box">';
                        echo '<div class="image">';
                          echo '<a href="product.php?book='.$i.'"><img src="' .$getBooks->img. '" width="250" height="300" /></a>';
                        echo '</div>';
                        echo '<div class="content">';
                          echo '<h3>' . $getBooks->name . '</h3>';
                          echo '<div class="price"> <span>$'.$getBooks->price.'</span>$'.$getBooks->discount.'</div>';
                          echo '<a href="#" class="btn2">รายละเอียดสินค้า</a>';
                        echo '</div>';
                      echo '</div>';
                    }
                    ++$i;
                  }
              ?>
            </div>
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
