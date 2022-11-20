
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
<nav class="navbar navbar-expand-lg bg-light">
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
      <button class="btn btn-primary" id="show" onclick="popup()"><i class="bi bi-person-circle">
          &nbsp;เข้าสู่ระบบ
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
            <h1>เข้าสู่ระบบ</h1>
            <div class="col">
              <div class="row">
                <div class="col">
                  <br>
                  <label for="username" class="form-label">ชื่อผู้ใช้ หรือ อีเมล:</label>
                  <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="" name="Login_username" required>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <br>
                  <label for="setPassword" class="form-label">รหัสผ่าน:</label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="" id="login_pass" name="Login_password" required>
                    <button class="input-group-text" type="button" id="login_see" onclick="seePassword_login()" value="0">
                      <i class="bi bi-eye-slash" id="login_icon_see"></i></button>
                  </div>
                  <a href="#">ลืมรหัสผ่าน?</a>
                </div>
              </div>
              <div class="row py-4">
                <div class="d-grid gap-2 col mx-auto">
                  <button class="btn btn-primary" type="submit" name="Login_Submit">เข้าสู่ระบบ</button>
                </div>
              </div>
              <div class="row">
                <div class="col login_signUp text-center">
                  <p>ยังไม่ได้เป็นสมาชิก? <a href="#" class="signUp-link">สมัครสมาชิก</a></p>
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
            <h1>ลงทะเบียน</h1>
            <div class="col">
              <div class="row">
                <div class="col">
                  <label for="username" class="form-label">ชื่อผู้ใช้:</label>
                  <input type="text" class="form-control" id="a" placeholder="" name="UserRegister" required>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <br>
                  <label for="email" class="form-label">อีเมล:</label>
                  <input type="email" class="form-control" id="b" placeholder="" name="EmailRegister" required>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <br>
                  <label for="setPassword" class="form-label">รหัสผ่าน:</label>
                  <div class="input-group mb-3">
                    <input type="password" class="form-control" placeholder="" aria-label="Password" id="regis_pass" name="PasswordRegister" required>
                    <button class="input-group-text" type="button" id="see" onclick="seePassword()" value="0">
                      <i class="bi bi-eye-slash" id="icon_see"></i></button>
                  </div>
                </div>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" required>
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
</div>


<?php 
    $_SESSION['show'] = 0;
    $_SESSION['Reregis'] =0;
?>