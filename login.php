
<?php 
    if ($_SESSION['show'] == 1){
      $_SESSION['show'] = '<div class="modals" id="login_popup" style="display: flex;">';
    }else{
      $_SESSION['show'] = '<div class="modals" id="login_popup">';
    }

    if ($_SESSION['Reregis'] == 1){
      $_SESSION['Reregis'] = '<div class="contents justify-content-center active">';
    }else{
      $_SESSION['Reregis'] = '<div class="contents justify-content-center">';
    }

?>

<head>
<style>
   @import url('https://fonts.googleapis.com/css2?family=Mitr&display=swap');
  body{
    font-family: 'Mitr', sans-serif;
  }
  .outbox{
    position: relative;
  }
  .userbox{
    position: relative;
  }
  .box0{
    position: relative;
  }
  .box1{
    position: relative;
    border: none;
    border-radius: 0px;
    border-bottom: 1px solid #000;
    outline: none;
    background: transparent;
  }
  .inbox1{
    top: 32px;
    left: 0px;
    position: absolute;
    font-size: 20px;
    color: #000;
    pointer-events: none;
    transition: .5s;
  }
  .inbox2{
    top: 7px;
    left: 0px;
    position: absolute;
    font-size: 20px;
    color: #000;
    pointer-events: none;
    transition: .5s;
  }
  .inbox3{
    top: 55px;
    left: 13px;
    position: absolute;
    font-size: 20px;
    color: #000;
    pointer-events: none;
    transition: .5s;
  }
  .userbox input:focus ~ label,
  .userbox input:valid ~ label {
  top:-6px;
  left: 0;
  color: #000;
  font-size: 18px;
}
  .userbox2 input:focus ~ label,
  .userbox2 input:valid ~ label {
  top:-30px;
  left: 0;
  color: #000;
  font-size: 18px;
}
  .userbox3 input:focus ~ label,
  .userbox3 input:valid ~ label {
  top:20px;
  left: 12px;
  color: #000;
  font-size: 18px;
}
.btncolor{
  background:#149f8e;
  border-color:#149f8e;
}
.btncolor:hover{
  background:#0f796c ;
  border-color:#0f796c ;
}
</style>
<nav class="navbar navbar-expand-lg red">
  <div class="container">
    <div class="col-md-4 col-sm-6 col-lg-7 col-xl-7 col-xxl-7 col-4 n_link">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse navbar" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ">
          <li><a class="nav-link" href="index.php">หน้าหลัก</a></li>
          <li class="dropdown-link"><a class="nav-link">หมวดหนังสือวรรณกรรม <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown">
              <li><a href="love.php">นิยายรัก</a></li>
              <li><a href="fantasy.php">นิยายแฟนตาซี</a></li>
              <li><a href="horror.php">นิยายสยองขวัญ</a></li>
              <li><a href="detective.php">นิยายสืบสวน</a></li>
            </ul>
          </li>
          <li class="dropdown-link"><a class="nav-link">หมวดหนังสือการศึกษา <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown">
              <li><a href="study.php">คู่มือการเรียน-สอบ</a></li>
              <li><a href="directionary.php">พจนานุกรม-สารานุกรม</a></li>
              <li><a href="law.php">หนังสือกฏหมาย</a></li>
            </ul>
          </li>
          <li class="dropdown-link"><a class="nav-link">หมวดหนังสือเด็กเล็ก <i class="fas fa-chevron-down"></i></a>
            <ul class="dropdown">
              <li><a href="cartoon.php">หนังสือการ์ตูน</a></li>
              <li><a href="tale.php">หนังสือนิทาน</a></li>
              <li><a href="knowledge.php">หนังสือภาพความรู้</a></li>
              <li><a href="kid.php">หนังสือเด็กเล็ก</a></li>
              <li><a href="skill.php">หนังสือเสริมทักษะ</a></li>
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
      <button class="btn btn-primary " id="show" onclick="popup()"><i class="bi bi-person-circle">
          &nbsp;Login
        </i></button>
    </div>
  </div>

</nav>



<?php  echo $_SESSION['show'];?>
  <div class="container d-flex justify-content-center">
    <?php echo $_SESSION['Reregis']; ?>
      <div class="forms">
        <form action="loging.php" for="Login" class="form login" method="POST">
          <div class="top-form">
            <button type="button" class="btn-close" id="close" onclick="closePup()"></button>
          </div>
          <div class="row">
            <h1>Login</h1>
            <div class="col">
              <div class="row">
                <div class="col outbox">
                  <br>
                  <div class="userbox">
                  <label for="username" class="form-label box0"></label>
                  <input type="text" class="form-control box1" id="exampleFormControlInput1" placeholder="" name="Login_username" required>
                  <label for="" class="inbox1">Username</label>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col outbox">
                <div class="userbox2">
                  <br>
                  <label for="setPassword" class="form-label box0"></label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control box1" placeholder="" id="login_pass" name="Login_password" required>
                    <label for="" class="inbox2">Password</label>
                    <button class="input-group-text" type="button" id="login_see" onclick="seePassword_login()" value="0">
                      <i class="bi bi-eye-slash" id="login_icon_see"></i></button>
                  </div>
                  </div>
                  <a href="#">forgot Password</a>
                </div>
              </div>
              <div class="row py-4">
                <div class="d-grid gap-2 col mx-auto">
                  <button class="btn btn-primary btncolor" type="submit" name="Login_Submit">Login</button>
                </div>
              </div>
              <div class="row">
                <div class="col login_signUp text-center">
                  <p>Not a Member? <a href="#" class="signUp-link">Register</a></p>
                </div>
              </div>
            </div>
          </div>
        </form>

        <form action="register.php" class="form register" method="POST">
          <div class="top-form">
            <button type="button" class="btn-close" onclick="closePup()" aria-label="Close"></button>
          </div>
          <div class="row">
            <h1>Register</h1>
            <div class="col">
              <div class="row">
                <div class="col outbox">
                <div class="userbox">
                  <label for="username" class="form-label box0"></label>
                  <input type="text" class="form-control box1" id="a" placeholder="" name="UserRegister" required>
                  <label for="" class="inbox1">Username</label>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col outbox">
                <div class="userbox3">
                  <br>
                  <label for="email" class="form-label box0"></label>
                  <input type="email" class="form-control box1" id="b" placeholder="" name="EmailRegister" required>
                  <label for="" class="inbox3">E-mail</label>
                </div>
                </div>
              </div>
              <div class="row">
                <div class="col outbox">
                <div class="userbox2">
                  <br>
                  <label for="setPassword" class="form-label box0"></label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control box1" placeholder="" aria-label="Password" id="regis_pass" name="PasswordRegister" required>
                    <label for="" class="inbox2">Password</label>
                    <button class="input-group-text" type="button" id="see" onclick="seePassword()" value="0">
                      <i class="bi bi-eye-slash" id="icon_see"></i></button>
                  </div>
                  </div>
                </div>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
                <label class="form-check-label" for="flexCheckDefault">
                  Confirm
                </label>
              </div>

              <div class="row py-4">
                <div class="d-grid gap-2 col mx-auto">
                  <button class="btn btn-primary btncolor" type="submit" name="Register_submit" id="Register_Button">Register</button>
                </div>
              </div>
              <div class="row">
                <div class="col signUp_signIn">
                  <p>I have Member? <a href="#" class="signIn-link">Login</a></p>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>


<?php 
    $_SESSION['show'] = 0;
    $_SESSION['Reregis'] =0;
?>