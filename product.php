<?php
    session_start();
    $_SESSION['page'] = "product.php?" . "book=" . $_GET['book'];
    error_reporting(0);

    $url = "./jsonFile/data.json";
    $response = file_get_contents($url);
    $data = json_decode($response);

    $namePage = $data[$_GET['book']]->name;
    $imgPage = $data[$_GET['book']]->img;
    $groupPage = $data[$_GET['book']]->group;
    $productID = $data[$_GET['book']]->id;
    $bookWriter = $data[$_GET['book']]->Wirter;
    $Price = $data[$_GET['book']]->price;
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

    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css?ver=5.13.3' />
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />
    <?php echo '<title>' . $namePage . '</title>'; ?>
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
<?php 
        echo '<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-7 col-sm-12 py-4 ">';
        echo    '<img src="'.$imgPage.'" class="img-fluid" />';
        echo '</div>';
        echo '<div class="col-xxl-7 col-xl-7 col-lg-6 col-md-5 col-sm-12 py-4 ">';
        echo    '<div class="row py-4">';
        echo        '<div class="col py-2">';
        echo            '<h3>'.$namePage.'</h3>';
        echo            '<p>'.$bookWriter.'</p>';
        echo         '</div>';
        echo     '</div>';
        echo     '<div class="row">';
        echo        '<div class="col">';
        echo            '<h5>รหัสสินค้า : '.$productID.'</h5>';
        echo            '<h5>หมวดหมู่ : '.$groupPage.'</h5>';
        echo        '</div>';
        echo     '</div>';
        echo     '<div class="row">';
        echo        '<div class="col-xxl-3 col-xl-2 col-lg-4 col-md-4 col-3 py-4 ">';
        echo            '<div class="input-group">';
        echo                '<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-dash"></i></button>';
        echo                '<input type="text" class="form-control text-center" placeholder="" aria-describedby="button-addon2" value="1" disabled>';
        echo                '<button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="bi bi-plus"></i></button>';
        echo            '</div>';
        echo        '</div>';
        echo     '</div>';
        echo    '<div class="row">';
        echo        '<div class="col">';
        echo            '<p>'.$Detali.'</p>';
        echo        '</div>';
        echo     '</div>';
        echo '</div>';
?>    
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