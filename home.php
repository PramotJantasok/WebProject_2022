<?php
    include('server.php');
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

  <!-- navbar-expand -->
<nav class="navbar navbar-expand-lg bg-light">
    <div class="container">
      <div class="col-md-4 col-sm-6 col-lg-7 col-xl-7 col-xxl-7 col-4 n_link">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse navbar" id="navbarSupportedContent">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">

            <li><a class="nav-link " href="index.html">โปรโมชั่น</a></li>
          <li><a class="nav-link" href="home.php">หน้าหลัก</a></li>

            <li class="dropdown-link"><a class="nav-link">หมวดหนังสือวรรณกรรม <i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown">
                <li><a href="love.html">นิยายรัก</a></li>
                <li><a href="fantasy.html">นิยายแฟนตาซี</a></li>
                <li><a href="horror.html">นิยายสยองขวัญ</a></li>
                <li><a href="detective.html">นิยายสืบสวน</a></li>
              </ul>
            </li>
            <li class="dropdown-link"><a class="nav-link">หมวดหนังสือการศึกษา <i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown">
                <li><a href="study.html">คู่มือการเรียน-สอบ</a></li>
                <li><a href="directionary.html">พจนานุกรม-สารานุกรม</a></li>
                <li><a href="law.html">หนังสือกฏหมาย</a></li>
              </ul>
            </li>
            <li class="dropdown-link"><a class="nav-link">หมวดหนังสือเด็กเล็ก <i class="fas fa-chevron-down"></i></a>
              <ul class="dropdown">
                <li><a href="cartoon.html">หนังสือการ์ตูน</a></li>
                <li><a href="tale.html">หนังสือนิทาน</a></li>
                <li><a href="knowledge.html">หนังสือภาพความรู้</a></li>
                <li><a href="kid.html">หนังสือเด็กเล็ก</a></li>
                <li><a href="skill.html">หนังสือเสริมทักษะ</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-8 col-md-8 col-sm-6 col-lg-6 col-xl-5 col-xxl-6 d-flex justify-content-end ">
        <form class="d-flex col-8 col-md-6 col-sm-7 col-lg-6 col-xl-6 col-xxl-8" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-outline-success me-3" type="submit"><i class="bi bi-search"></i></button>
        </form>
        <button class="btn btn-primary me-1"><i class="bi bi-cart3"></i></button>
         <button class="btn btn-primary" id="show" onclick="popup()"><i class="bi bi-person-circle">
            &nbsp;เข้าสู่ระบบ
         </i></button>
      </div>
    </div>

</nav>

  <!-- <div class="modals" id="login_popup">
    <div class="container d-flex justify-content-center">
      <div class="contents justify-content-center">
        <div class="forms">
          <form action="home.php" for="Login" class="form login">
            <div class="top-form">
              <button type="button" class="btn-close" id="close" onclick="closePup()"></button>
            </div>
            <div class="row">
              <h1>เข้าสู่ระบบ</h1>
              <div class="col">
                <div class="row">
                  <div class="col">
                    <br>
                    <label for="username" class="form-label">ชื่อผู้ใช้ หรือ อีเมล:</label>
                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="Login_username">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <br>
                    <label for="setPassword" class="form-label">รหัสผ่าน:</label>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="" id="login_pass" name="Login_password">
                      <button class="input-group-text" type="button" id="login_see" onclick="seePassword_login()" value="0">
                        <i class="bi bi-eye-slash" id="login_icon_see"></i></button>
                    </div>
                    <a href="#">ลืมรหัสผ่าน?</a>
                  </div>
                </div>
                <div class="row py-4">
                  <div class="d-grid gap-2 col mx-auto">
                    <button class="btn btn-primary" type="submit" name="Login_Submit">Button</button>
                  </div>
                </div>
                <div class="row">
                  <div class="col login_signUp">
                    <p>ยังไม่ได้เป็นสมาชิก? <a href="#" class="signUp-link">สมัครสมาชิก</a></p>
                  </div>
                </div>
              </div>
            </div>
          </form>

          <form action="home.php" class="form register" method="POST">
            <div class="top-form">
              <button type="button" class="btn-close" onclick="closePup()" aria-label="Close"></button>
            </div>
            <div class="row">
              <h1>ลงทะเบียน</h1>
              <div class="col">
                <div class="row">
                  <div class="col">
                    <label for="username" class="form-label">ชื่อผู้ใช้:</label>
                    <input type="text" class="form-control" id="a" placeholder="" name="UserRegister">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <br>
                    <label for="email" class="form-label">อีเมล:</label>
                    <input type="email" class="form-control" id="b" placeholder="" name="EmailRegister">
                  </div>
                </div>
                <div class="row">
                  <div class="col">
                    <br>
                    <label for="setPassword" class="form-label">รหัสผ่าน:</label>
                    <div class="input-group mb-3">
                      <input type="password" class="form-control" placeholder="" aria-label="Password" id="regis_pass" name="PasswordRegister">
                      <button class="input-group-text" type="button" id="see" onclick="seePassword()" value="0">
                        <i class="bi bi-eye-slash" id="icon_see"></i></button>
                    </div>
                  </div>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    ตรวจสอบข้อมูลเเล้ว
                  </label>
                </div>

                <div class="row py-4">
                  <div class="d-grid gap-2 col mx-auto">
                    <button class="btn btn-primary" type="submit" name="Register_submit" id="Register_Button">ลงทะเบียน</button>
                  </div>
                </div>
                <div class="row">
                  <div class="col signUp_signIn">
                    <p>ฉันเป็นสมาชิกเเล้ว? <a href="#" class="signIn-link">เข้าสู่ระบบ</a></p>
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->

  <?php include('logged.php') ?>

  <!-- <div class="modals" id="login_popup">
    <div class="container d-flex justify-content-center">
      <div class="contents justify-content-center">
        <div class="forms">
          <form class="form logged">
            
            <div class="row">
              <div class="col">
              <div class="top-form">
              <button type="button" class="btn-close" id="close" onclick="closePup()"></button>
            </div>
                <div class="text-center">
                  <img src="https://icons.veryicon.com/png/o/internet--web/prejudice/user-128.png" class="rounded" width="100" height="100">
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div> -->





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

  <div class="container">
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

  <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
  <script src="./js_file/modals.js"></script>
  <script src="./js_file/slider.js"></script>



</body>

</html>