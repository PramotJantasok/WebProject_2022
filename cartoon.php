<?php
// include('server.php');
    include('listProduct.php');
    session_start();
    $_SESSION['page'] = "cartoon.php";
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css?ver=5.13.3' />
    <link rel='stylesheet' href='css_file/productstyle2.css' />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css_file/index.css">
    <title>หนังสือการ์ตูน</title>
    <style id="custom-css" type="text/css">
        .primary.is-outline:hover,
        .badge-inner {
            background-color: hsl(189, 63%, 61%);
        }

        .is-outline.primary {
            color: hsl(189, 63%, 61%);
        }

        .row {
            max-width: 1570px
        }

        .row.row-collapse {
            max-width: 1540px
        }

        .row.row-small {
            max-width: 1562px
        }

        .row.row-large {
            max-width: 1600px
        }

        .price-wrapper {
            font-size: 16px;
            right: 15px;
            color: grey;
            text-align: center;
            margin-top: 2px;
        }

        .add-to-cart-button {
            text-align: center;
            margin-top: 2px;
        }

        p {
            font-size: 20px;
            color: black;
            text-align: center;
            margin-top: 10%;
        }

        a {
            font-size: 16px;
            color: black;
            text-align: center;
        }

        .woocommerce-LoopProduct-link {
            font-size: 20px;
            color: black;
            text-align: center;
        }
        .container-fluid {
        margin-top: 101px;
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
    <main id="main" class="">
        <div class="container-fluid py-2 bg-info pad h d-flex align-items-center justify-content-center">
            <h1 class="text-center">Book'n Stationery SHOP</h1>
        </div>

        <?php

        if (!$_SESSION['username'] && !$_SESSION['ID']) {
            include('login.php');
        } else {
            include('logged.php');
        }

        ?>

        <div class="col large-16">
            <div class="shop-container">
                <div class="woocommerce-notices-wrapper"></div>
                <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">
                    <?php setList("การ์ตูน"); ?>
                </div><!-- row -->
            </div><!-- shop container -->
        </div>
        </div>
    </main>
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
    <script src="./js_file/modals.js"></script>
    <script src="./js_file/slider.js"></script>
</body>

</html>