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
          z-index: 1;
          color: red;
          display: flex;
          justify-content:flex-end;
          padding: 0px 20px 0px 0px;
          font-size: 30px;
        }

        .popup .close:hover {
            color: red;
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
        .contents{
          overflow:visible;
        }
        .card {
            width: 500px;
            height:200px;
            background-color: #efefef;
            border: none;
            position:relative;
            transition:0.5s;
            /* cursor: pointer; */
        }
        .card:hover{
          height:460px;
        }
        .backgroundimg{
          background-image:url(https://img.freepik.com/free-vector/books-seamless-pattern-doodle-outline-textbooks_107791-9584.jpg?w=2000);
          position: absolute;
          width:100%;
          height: 100%;
          z-index: 1;
          opacity: 0.1;
          background-size: cover;
        }
        .image1{
          position:absolute;
          left:50%;
          top:-50px;
          transform:translateX(-50%);
          width:150px;
          height:150px;
          transition:0.5s;
          z-index:2;
        }
        .image1 img{
          position:absolute;
          left:0;
          top:0;
          width:100%;
          height:100%;
          object-fit:cover;
          transition:0.5s;
        }
        .card:hover .image1{
          width:250px;
          height:250px;
        }
        .word1{
          position: absolute;
          width: 100%;
          height: 100%;
          flex-direction: column;
          justify-content: flex-end;
          align-items: center;
          overflow:hidden;
        }
        .detail{
          padding: 40px;
          display: flex;
          flex-direction:column;
          justify-content: space-between;
          align-items: center;
          text-align: center;
          width: 100%;
          transform: translateY(169px);
          transition: 0.5s;
          z-index:3;
        }
        .card:hover .detail{
          transform: translateY(25px);
        }
        .buttonlotto{
          padding: 22px;
          transform: translateY(70px);
          transition: 0.5s;
          z-index:3;
        }
        .card:hover .buttonlotto{
          transform: translateY(-20px);
        }
        .word2{
          position: absolute;
          width: 100%;
          flex-direction: column;
          justify-content: center;
          align-items: flex-end;
        }
        .button2{
          border: 1px solid black;
          border-radius: 35px;
        }
        .button2:hover{
          background-color: #ff5f95;
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
            background-color: #555;
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
      <button class="btn btn-primary me-1"><a href="basket.php" style="color: #FFF;"><i class="bi bi-cart3"></i></a></button>
      <button class="btn btn-primary" id="show" onclick="popup()"><i class="bi bi-person-circle">
          &nbsp; <?php echo $_SESSION['username']; ?>
        </i></button>
    </div>
  </div>

</nav>


<div class="modals" id="login_popup">
  <div class="container d-flex justify-content-center">
    <div class="contents justify-content-center">
        <!-- <div class="popup"> -->
            
            <!-- <div class="ctt"> -->
                <!-- <div class="container mt-4 mb-4 p-3 d-flex justify-content-center"> -->
                    <div class="card">
                      <div class="backgroundimg"></div>
                    <a class="close" onclick="closePup()" >&times;</a>
                        <div class=" image1">
                                <img class="profile" src="https://preview.redd.it/1zbe7a0j3kt61.png?auto=webp&s=89247fc063eff076859ba310a7971a4bdb772233" height="125" width="125" />
                            <!-- <div class="d-flex flex-row justify-content-center align-items-center gap-2"> 
                                <span class="idd1 mt-3">#2545</span>
                            </div> -->
                        </div>
                            <div class=" d-flex mt-2 word1">
                              <div class="detail">
                                <span class="name mt-3">Ratchanon Kathip</span><br>
                                <span class="idd">64070220@kmitl.ac.th</span><br>
                                <span class="join">BookShop@ITKMITL</span><br>
                              </div>
                              <div class="buttonlotto">
                                <form action="loging.php" method="POST">
                                <button class="butt_out button2" name="logout">Log Out</button> 
                                </form>
                              </div>
                            </div>
                            <!-- <div class=" px-2 rounded mt-4 date word2"> 
                                <span class="join">BookShop@ITKMITL</span>
                            </div> -->
                            
                    </div>
                <!-- </div> -->
            <!-- </div> -->
        <!-- </div> -->
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