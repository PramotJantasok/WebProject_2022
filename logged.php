


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
            &nbsp; <?php echo $_SESSION['username'];?>
         </i></button>
      </div>
    </div>

</nav> 


<div class="modals" id="login_popup">
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
</div>