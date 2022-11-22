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
    @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');
  body{
    font-family: 'Mitr', sans-serif;
  }
  .featured .featured-slider .box .content h3{
    font-size: 1rem;
    color:var(--black);
}
.back1{
  background-image: url("https://media.discordapp.net/attachments/604627208476033026/1044305930617102458/Cashbackbook.png?width=1440&height=540");
  background-repeat: no-repeat;
  background-position:center;
  background-size:cover;
}
.back2{
  background-image: url("https://cdn.discordapp.com/attachments/604627208476033026/1044307543842881586/ad1.png");
  background-repeat: no-repeat;
  background-position:center;
  background-size:cover;
}
.back3{
  background-image: url("https://cdn.discordapp.com/attachments/604627208476033026/1044309100730793984/ad2.png");
  background-repeat: no-repeat;
  background-position:center;
  background-size:cover;
}
.back4{
  background-image: url("https://cdn.discordapp.com/attachments/604627208476033026/1044313289594777700/ad4.png");
  background-repeat: no-repeat;
  background-position:center;
  background-size:cover;
}
.back5{
  background-image: url("https://cdn.discordapp.com/attachments/604627208476033026/1044314892699717776/ad3.png");
  background-repeat: no-repeat;
  background-position:center;
  background-size:cover;
}
.slider{
  height: 91vh;
  margin-top: 85px;
}
.navbarlotto{
  /* background-image: url("https://cdn.discordapp.com/attachments/604627208476033026/1044303222417916004/logobook.png"); */
  background-repeat: no-repeat;
  background-position:center;
  background-size:cover;
  background-color:#77b5fe;
}
.imgbylottov2{
  position: absolute;
  min-width:30%;
  left:0px;
  transform:translateY(-10px);
}
.imgbylottov2 img{
  width:25%;
}
.container-fluid {
        
      }
      .textfoot {
        margin-top: 7.25vh;
      }
      @media (max-width: 576px) {
        .textfoot {
          margin-top: 0;
        }
      }
      .txtfont {
        font-family: "Mitr", sans-serif;
        font-size: 18px;
      }
      .row-1 {
        background-color: #1e242a;
      }

      .row-2 {
        background-color: #28323c;
      }
  </style>
</head>

<body>
  <div class="container-fluid py-2  pad h d-flex align-items-center justify-content-center navbarlotto">
    <div class="textlotto">
      <h1>Book'n SHOP</h1>
    </div>
    <div class="imgbylottov2">
      <img src="https://cdn.discordapp.com/attachments/604627208476033026/1044547857681748048/image.png" alt="">
    </div>
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
            <div class="back1">
              <img src="" alt="">
            </div>
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
                          echo '<img src="' .$getBooks->img. '" width="300" height="320" />';
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
                          echo '<img src="' .$getBooks->img. '" width="300" height="320" />';
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
                          echo '<a href="product.php?book='.$i.'"><img src="' .$getBooks->img. '" width="300" height="320" /></a>';
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

  <div class="container-fluid pb-0 mb-0 justify-content-center text-light">
      <footer>
        <div class="row justify-content-center mb-0 pt-3 pb-0 row-2 px-3">
          <div class="col-12">
            <div class="row row-2">
              <div class="col-sm-4 text-center">
                <img
                  style="width: 150px"
                  src="https://media.discordapp.net/attachments/607137108590592000/1044553020970639410/itlogo.png?width=499&height=499"
                  alt="it"
                />
                <img
                  style="width: 130px"
                  src="https://media.discordapp.net/attachments/607137108590592000/1044555799030149160/bookshoplogo.png"
                  alt="logo"
                />
              </div>
              <div class="col-sm-8 my-sm-0 mt-5">
                <h5 class="text-end textfoot txtfont">
                  เว็บไซต์นี้เป็นส่วนหนึ่งของวิชา Website Technology
                </h5>
                <h5 class="text-end txtfont">
                  คณะเทคโนโลยีสารสนเทศ
                  สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง
                </h5>
              </div>
            </div>
          </div>
        </div>
        <div
          class="row justify-content-center mt-0 pt-0 row-1 mb-0 px-sm-3 px-2"
        >
          <div class="col-12">
            <div class="row my-4 row-1 no-gutters">
              <div class="col-sm-3 col-auto text-center">
                <small>&#9400; BookShop</small>
              </div>
              <div class="col-md-3 col-auto"></div>
              <div class="col-md-3 col-auto"></div>
              <div class="col my-auto text-md-left text-right">
                <small> IT@KMITL </small>
              </div>
            </div>
          </div>
        </div>
      </footer>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="./js_file/modals.js"></script>
  <script src="./js_file/slider.js"></script>
  


</body>

</html>
<?php ?>