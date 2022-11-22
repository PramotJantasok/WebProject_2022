<?php
    // session_start();
    include('server.php');
    error_reporting(0);

    $indexGET = $_GET['book'];
    $_SESSION['page'] = "product.php?" . "book=" . $indexGET;
    $url = "./jsonFile/data.json";
    $response = file_get_contents($url);
    $data = json_decode($response);

    $namePage = $data[$_GET['book']]->name;
    $imgPage = $data[$_GET['book']]->img;
    $groupPage = $data[$_GET['book']]->group;
    $productID = $data[$_GET['book']]->id;
    $bookWriter = $data[$_GET['book']]->Writer;
    $Price = $data[$_GET['book']]->price;
    $Discount = $data[$_GET['book']] -> discount;
    $Detali = "";

    foreach ($data[$_GET['book']]->detail as $mes){
        $Detali = $Detali . $mes;
    }

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="./css_file/index.css">
    <link rel="stylesheet" href="./css_file/slider.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css?ver=5.13.3' />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <?php echo '<title>' . $namePage . '</title>'; ?>
    <style>
        .price-wrapper {
            font-size: 20px;
            right: 10px;
            color: grey;
            margin-top: 2px;
        }
        .dis{
            font-size: 20px;
        }
    </style>
</head>

<body>

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

    <div class="container py-4">
        <div class="row py-4">
         <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-7 col-sm-12 py-4 ">
            <?php echo '<img src="'.$imgPage.'" class="img-fluid" />'; ?>
         </div>
         <div class="col-xxl-7 col-xl-7 col-lg-6 col-md-5 col-sm-12 py-4 ">
            <div class="row py-4">
                <div class="col py-2">
                    <?php echo '<h3>' .$namePage. '</h3>'; ?>
                    <?php echo '<p>'. $bookWriter .'</p>'; ?>
                 </div>
             </div>
             <div class="row">
                <div class="col">
                    <?php echo '<h5>รหัสสินค้า : '.$productID.'</h5>'; ?>
                    <?php echo '<h5>หมวดหมู่ : '.$groupPage.'</h5>' ;?>
                </div>
             </div>
            <!-- <div class="row py-4">
                <div class="col-xxl-3 col-xl-2 col-lg-4 col-md-4 col-3 py-4 ">
                    <div class="input-group">
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-dash"></i></button>
                        <input type="text" class="form-control text-center" placeholder="" aria-describedby="button-addon2" value="1" disabled>
                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-plus"></i></button>
                    </div>
                </div>
            </div> -->
            <div class="row">
                <div class="col">
                    <?php echo '<p>'.$Detali.'</p>'; ?>
                </div>
            </div>
            <div class="row">
                <div class="price-wrapper">
                <?php  if ($Discount > 0){
                    echo '<h4>ราคา : <span class="price">';
                    echo '<del>';
                    echo '<span class="woocommerce-Price-amount amount dis">';
                    echo '<bdi>';
                    echo '<span class="woocommerce-Price-currencySymbol ">&#3647;</span> '. $Price.'';
                    echo '</bdi>';
                    echo '</span>';
                    echo '</del>&nbsp;';
                    // echo '<ins>';
                    echo '<span class="woocommerce-Price-amount amount">';
                    echo '<bdi>';
                    echo '<span class="woocommerce-Price-currencySymbol">';
                    echo '&#3647;';
                    echo '</span>'. $Discount.'';
                    echo '</bdi>';
                    echo '</span>';
                    // echo '</ins>';
                    echo '</span> </h4>';
                }else{
                    echo '<div class="price-wrapper">';
                    echo '<h4> ราคา : <span class="price">
                    <span class="woocommerce-Price-amount amount">
                    <span class="woocommerce-Price-currencySymbol">
                    &#3647;
                    </span>'. $Price .'</span></span> </h4>';      
                    
                }
                    ?>
                </div>
            </div>
            <div class="row py-4">
                <div class="col">
                    <?php 
                        echo '<form method="POST" action="'.$_SESSION['page'].'">'; 
                    ?>
                        <button type="submit" class="btn btn-info btn-lg" style="color: #FFF;" name="addBasket">หยิบใส่ตะกร้า</button>
                    </form>
                </div>
            </div>
         </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    <script src="//code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="./js_file/modals.js"></script>
    <script src="./js_file/slider.js"></script>

</body>

</html>

<?php 
        if (isset($_POST['addBasket'])){
            if (!$_SESSION['username']){
                echo "<script>alert('กรุณาเข้าสู่ระบบก่อนทำรายการ');</script>"; 
            }else{
                if ($Discount != 0){
                    addBasket($_SESSION['id'], $_SESSION['username'],$namePage,$Discount, $indexGET);
                }else{
                    addBasket($_SESSION['id'], $_SESSION['username'],$namePage,$Price, $indexGET); 
                }

            }
        }
?>