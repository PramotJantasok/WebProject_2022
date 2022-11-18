<?php
    // include('server.php');
    session_start();
    $_SESSION['page'] = "knowledge.php";
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
    <title>หนังสือภาพความรู้</title>
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

                <div class="product-small  col product-type-simple">
                    <div>
                        <div class="product-small box ">
                            <div class="box-image">
                                <div class="image">
                                    <a href="#book1" aria-label="หนูรอบรู้ ชวนเพื่อนดูแมลง">
                                        <img src="https://amarinbooks.com/wp-content/uploads/2022/06/1_Cover-Choun-pheun-do-MALANG-CC-OK-02-510x510.png"
                                            width="250" height="300" />
                                    </a>
                                </div>
                            </div>

                            <div class="box-text box-text-products text-center grid-style-2">
                                <div class="title-wrapper">
                                    <p class="name product-title woocommerce-loop-product__title"><a href="#book1"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">หนูรอบรู้ ชวนเพื่อนดูแมลง</a></p>
                                </div>
                                <div class="price-wrapper">
                                    <span class="price"><span class="woocommerce-Price-amount amount"><span
                                                class="woocommerce-Price-currencySymbol">&#3647;</span>&nbsp;185.00</span></span>
                                </div>
                                <div class="add-to-cart-button"><a href="#bookid" data-quantity="1"
                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                        rel="nofollow">หยิบใส่ตะกร้า</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-small col product-type-simple">
                    <div class="product-small box ">
                        <div class="box-image">
                            <div class="image">
                                <a href="#book2" aria-label="คำถามน่ารู้หนูตอบได้ เรื่อง ดวงจันทร์">
                                    <img src="https://amarinbooks.com/wp-content/uploads/2022/05/%E0%B8%84%E0%B8%B3%E0%B8%96%E0%B8%B2%E0%B8%A1%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%B9%E0%B9%89%E0%B8%94%E0%B8%A7%E0%B8%87%E0%B8%88%E0%B8%B1%E0%B8%99%E0%B8%97%E0%B8%A3%E0%B9%8C-510x510.png"
                                        width="250" height="300" />
                                </a>
                            </div>
                            <div class="box-text box-text-products text-center grid-style-2">
                                <div class="title-wrapper">
                                    <p class="name product-title woocommerce-loop-product__title"><a href="#book2"
                                            class="woocommerce-LoopProduct-link woocommerce-loop-product__link">คำถามน่ารู้หนูตอบได้ เรื่อง ดวงจันทร์</a>
                                    </p>
                                </div>
                                <div class="price-wrapper">
                                    <span class="price">
                                        <del>
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>
                                                    <span class="woocommerce-Price-currencySymbol">&#3647;</span> 275.00
                                                </bdi>
                                            </span>
                                        </del>&nbsp;
                                        <ins>
                                            <span class="woocommerce-Price-amount amount">
                                                <bdi>
                                                    <span class="woocommerce-Price-currencySymbol">
                                                     &#3647;
                                                    </span>230.00
                                                </bdi>
                                            </span>
                                        </ins>
                                    </span>
                                </div>
                                <div class="add-to-cart-button"><a href="#bookid" data-quantity="1"
                                        data-product_id="#bookid"
                                        class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                        rel="nofollow">หยิบใส่ตะกร้า</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="product-small col product-type-simple">

                    <div class="product-small box ">
                        <div class="box-image">
                            <div class="image">
                                <a href="#book3" aria-label="คำถามน่ารู้หนูตอบได้ เรื่อง ระบบสุริยะ">
                                    <img src="https://amarinbooks.com/wp-content/uploads/2022/05/%E0%B8%84%E0%B8%B3%E0%B8%96%E0%B8%B2%E0%B8%A1%E0%B8%99%E0%B9%88%E0%B8%B2%E0%B8%A3%E0%B8%B9%E0%B9%89%E0%B8%AA%E0%B8%B8%E0%B8%A3%E0%B8%B4%E0%B8%A2%E0%B8%B0-510x510.png"
                                        width="250" height="300" /></a>
                            </div>
                        </div>

                        <div class="box-text box-text-products text-center grid-style-2">
                            <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title"><a href="#book3"
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">คำถามน่ารู้หนูตอบได้ เรื่อง ระบบสุริยะ</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span class="price">
                                    <del>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">&#3647;</span> 275.00
                                            </bdi>
                                        </span>
                                    </del>&nbsp;
                                    <ins>
                                        <span class="woocommerce-Price-amount amount">
                                            <bdi>
                                                <span class="woocommerce-Price-currencySymbol">
                                                 &#3647;
                                                </span>230.00
                                            </bdi>
                                        </span>
                                    </ins>
                                </span>
                            </div>
                            <div class="add-to-cart-button"><a href="#bookid" data-quantity="1"
                                    data-product_id="#bookid"
                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                    rel="nofollow">หยิบใส่ตะกร้า</a></div>
                        </div>
                    </div>
                </div>

                <div class="product-small col product-type-simple">

                    <div class="product-small box ">
                        <div class="box-image">
                            <div class="image">
                                <a href="#book4" aria-label="ความลับจากธรรมชาติ">
                                    <img src="https://amarinbooks.com/wp-content/uploads/2021/10/4-510x510.png"
                                        width="250" height="300" /></a>
                            </div>
                        </div>

                        <div class="box-text box-text-products text-center grid-style-2">
                            <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title"><a href="#book4"
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">ความลับจากธรรมชาติ</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span class="price"><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">&#3647;</span>&nbsp;165.00</span></span>
                            </div>
                            <div class="add-to-cart-button"><a href="#bookid" data-quantity="1"
                                    data-product_id="#bookid"
                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                    rel="nofollow">หยิบใส่ตะกร้า</a></div>
                        </div>
                    </div>
                </div>

                <div class="product-small col product-type-simple">

                    <div class="product-small box ">
                        <div class="box-image">
                            <div class="image">
                                <a href="#book5" aria-label="มหัศจรรย์ล้อรอบโลก">
                                    <img src="https://amarinbooks.com/wp-content/uploads/2021/04/%E0%B8%A5%E0%B9%89%E0%B8%AD-510x510.png"
                                        width="250" height="300" /></a>
                            </div>
                        </div>

                        <div class="box-text box-text-products text-center grid-style-2">
                            <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title"><a href="#book5"
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">มหัศจรรย์ล้อรอบโลก</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span class="price"><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">&#3647;</span>&nbsp;195.00</span></span>
                            </div>
                            <div class="add-to-cart-button"><a href="#bookid" data-quantity="1"
                                    data-product_id="#bookid"
                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                    rel="nofollow">หยิบใส่ตะกร้า</a></div>
                        </div>
                    </div>
                </div>

                <div class="product-small col product-type-simple">

                    <div class="product-small box ">
                        <div class="box-image">
                            <div class="image">
                                <a href="#book6" aria-label="มหัศจรรย์ปีกรอบโลก">
                                    <img src="https://amarinbooks.com/wp-content/uploads/2021/04/%E0%B8%9B%E0%B8%B5%E0%B8%A3%E0%B8%AD%E0%B8%9A%E0%B9%82%E0%B8%A5%E0%B8%81-510x510.png"
                                        width="250" height="300" /></a>
                            </div>
                        </div>

                        <div class="box-text box-text-products text-center grid-style-2">
                            <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title"><a href="#book6"
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">มหัศจรรย์ปีกรอบโลก</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span class="price"><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">&#3647;</span>&nbsp;180.00</span></span>
                            </div>
                            <div class="add-to-cart-button"><a href="#bookid" data-quantity="1"
                                    data-product_id="#bookid"
                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                    rel="nofollow">หยิบใส่ตะกร้า</a></div>
                        </div>
                    </div>
                </div>

                <div class="product-small col product-type-simple">

                    <div class="product-small box ">
                        <div class="box-image">
                            <div class="image">
                                <a href="#book7" aria-label="เปิดความลับ ทะเลและมหาสมุทร">
                                    <img src="https://amarinbooks.com/wp-content/uploads/2021/05/%E0%B9%80%E0%B8%9B%E0%B8%B4%E0%B8%94%E0%B8%84%E0%B8%A7%E0%B8%B2%E0%B8%A1%E0%B8%A5%E0%B8%B1%E0%B8%9A%E0%B8%97%E0%B8%B0%E0%B9%80%E0%B8%A5%E0%B9%81%E0%B8%A5%E0%B8%B0%E0%B8%A1%E0%B8%AB%E0%B8%B2%E0%B8%AA%E0%B8%A1%E0%B8%B8%E0%B8%97%E0%B8%A3-510x510.png"
                                        width="250" height="300" /></a>
                            </div>
                        </div>

                        <div class="box-text box-text-products text-center grid-style-2">
                            <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title"><a href="#book7"
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">เปิดความลับ ทะเลและมหาสมุทร</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span class="price"><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">&#3647;</span>&nbsp;185.00</span></span>
                            </div>
                            <div class="add-to-cart-button"><a href="#bookid" data-quantity="1"
                                    data-product_id="#bookid"
                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                    rel="nofollow">หยิบใส่ตะกร้า</a></div>
                        </div>
                    </div>
                </div>

                <div class="product-small col product-type-simple">

                    <div class="product-small box ">
                        <div class="box-image">
                            <div class="image">
                                <a href="#book8" aria-label="เปิดความลับ โรงพยาบาล">
                                    <img src="https://amarinbooks.com/wp-content/uploads/2020/01/hospital-02-510x510.png"
                                        width="250" height="300" /></a>
                            </div>
                        </div>

                        <div class="box-text box-text-products text-center grid-style-2">
                            <div class="title-wrapper">
                                <p class="name product-title woocommerce-loop-product__title"><a href="#book8"
                                        class="woocommerce-LoopProduct-link woocommerce-loop-product__link">เปิดความลับ โรงพยาบาล</a>
                                </p>
                            </div>
                            <div class="price-wrapper">
                                <span class="price"><span class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">&#3647;</span>&nbsp;200.00</span></span>
                            </div>
                            <div class="add-to-cart-button"><a href="#bookid" data-quantity="1"
                                    data-product_id="#bookid"
                                    class="primary is-small mb-0 button product_type_simple add_to_cart_button ajax_add_to_cart is-outline"
                                    rel="nofollow">หยิบใส่ตะกร้า</a></div>
                        </div>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- shop container -->
    </div>
    </div>
</main>
<script src="./js_file/modals.js"></script>
<script src="./js_file/slider.js"></script>
</body>

</html>