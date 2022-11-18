<?php
    // include('server.php');
    session_start();
    $_SESSION['page'] = "kid.php";
    error_reporting(0);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css?ver=5.13.3'/>
    <link rel='stylesheet' href='css_file/productstyle.css'/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="./css_file/index.css">
    <title>หนังสือเด็กเล็ก</title>
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
        }

        a {
            font-size: 16px;
            color: black;
            text-align: center;
        }

        .woocommerce-LoopProduct-link{
            font-size: 20px;
            color: black;
            text-align: center;
        }
    </style>
</head>

<body>
<main id="main" class="">
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
        

<div class="col large-16">
        <div class="shop-container">

            <div class="woocommerce-notices-wrapper"></div>
            <div class="products row row-small large-columns-3 medium-columns-3 small-columns-2">
            <?php 
                  $url = "./jsonFile/data.json";    
                  $response = file_get_contents($url);
                  $data = json_decode($response);
                  foreach ($data as $getBooks){
                    if ($getBooks->group == "สำหรับเด็ก"){
                        echo '<div class="product-small  col product-type-simple">';
                            echo '<div class="product-small box ">';
                                echo '<div class="box-image">';
                                    echo '<div class="image">';
                                        echo '<a href="#book1" aria-label="">';
                                            echo '<img src="'. $getBooks->img .'" width="250" height="300" />';
                                        echo '</a>';
                                    echo '</div>';
                                echo '</div>';
                                echo '<div class="box-text box-text-products text-center grid-style-2">';
                                    echo '<div class="title-wrapper">';
                                        echo '<p class="name product-title woocommerce-loop-product__title"><a href="#book1" class="woocommerce-LoopProduct-link woocommerce-loop-product__link">'. $getBooks->name .'</a></p>';
                                    echo '</div>';
                                    echo '<div class="price-wrapper">';
                                        echo '<span class="price"><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">&#3647;</span>&nbsp;'. $getBooks->price .'</span></span>';
                                    echo '</div>';
                                    echo '<div class="add-to-cart-button"><a href="#bookid" data-quantity="1" class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline" rel="nofollow">หยิบใส่ตะกร้า</a></div>';
                                echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                  }
                ?>
            </div><!-- row -->
        </div><!-- shop container -->
    </div>
    </div>
</main>
<script src="./js_file/modals.js"></script>
<script src="./js_file/slider.js"></script>
</body>

</html>