<head>
    <style>
        .popup {
            padding: 20px;
            background: #fff;
            border-radius: 5px;
            width: 100%;
            height:100%;
            position: relative;
            transition: all 0.5s ease-in-out;
        }

        .popup .close {
            position: absolute;
            top: 20px;
            right: 30px;
            transition: all 200ms;
            font-size: 30px;
            font-weight: bold;
            text-decoration: none;
            color: #333;
        }
        .close{
          cursor: pointer;
        }

        .popup .close:hover {
            color: #333;
        }

        .popup .ctt {
            max-height: 20%;
        }

        @media screen and (max-width: 1000px) {
            .box {
                width: 70%;
            }

            .popup {
                width: 70%;
            }
        }

        .card {
            width: 500px;
            background-color: #efefef;
            border: none;
            /* cursor: pointer; */
        }

        .profile {
            border-radius: 50%;
        }

        /* .butt_out {
            height: 150px;
            width: 150px;
            border-radius: 50%
        } */

        .name {
            font-size: 22px;
            font-weight: bold
        }

        .idd {
            font-size: 14px;
            font-weight: 600
        }

        .idd1 {
            font-size: 12px
        }

        .number {
            font-size: 22px;
            font-weight: bold
        }

        .butt_out {
            height: 40px;
            width: 150px;
            border: none;
            background-color: #000;
            color: #fff;
            font-size: 15px
        }
        .join {
        font-size: 14px;
        color: #a0a0a0;
        font-weight: bold
        }
    </style>
</head>


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
          &nbsp; <?php echo $_SESSION['username']; ?>
        </i></button>
    </div>
  </div>

</nav>


<div class="modals" id="login_popup">
  <div class="container d-flex justify-content-center">
    <div class="contents justify-content-center">
        <div class="popup">
            <h3>My Profile</h3>
            <a class="close" onclick="closePup()" >&times;</a>
            <div class="ctt">
                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card p-4">
                        <div class=" image d-flex flex-column justify-content-center align-items-center  mt-4 mb-4 p-3 d-flex">
                                <img class="profile justify-content-center align-items-center" src="https://preview.redd.it/1zbe7a0j3kt61.png?auto=webp&s=89247fc063eff076859ba310a7971a4bdb772233" height="125" width="125" />
                            <span class="name mt-3">Ratchanon Kathip</span>
                            <span class="idd">64070220@kmitl.ac.th</span>
                            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                                <span class="idd1 mt-3">#2545</span>
                            </div>
                            <div class=" d-flex mt-2">
                                <form action="loging.php" method="POST">
                                <button class="butt_out" name="logout">Log Out</button> 
                                </form>
                            </div>
                            <div class=" px-2 rounded mt-4 date "> 
                                <span class="join">BookShop@ITKMITL</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>



<!-- <body>
    <div class="box">
        <a class="button" href="#popup1">Press</a>
    </div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <h3>My Profile</h3>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    
                </div>
            </div>
        </div>
    </div>
</body> -->