
<?php 
    include('server.php');
    session_start();
    if(!$_SESSION['username']){
        echo "<script>alert('กรุณาเข้าสู่ระบบก่อนทำรายการ');</script>"; 
    }else{
        $callDB = new Address();
        $myAddress = array();
        $myindexAdress = array();
        $uesSQL = "SELECT * from address";
        $respones = $callDB->query($uesSQL);
        while ($addr = $respones->fetchArray(SQLITE3_ASSOC)){
            if ($addr['ID'] == $_SESSION['id']){
                array_push($myAddress, $addr['ADDRESS']);
                array_push($myindexAdress, $addr['NUMBER']);
            }
        }
        $callDB->close();
    }
    $_SESSION['sum'] = 0;
    error_reporting(0);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <META http-equiv="expires" content="0">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <link href="./css_file/redio.css" rel="stylesheet">
    <title>Checkout-Book'n Stationery SHOP</title>
    <style>
        body{
            background-color: #5B5A5B;
        }
        .container{
            margin-top: 3%;
            border-radius: 10px;
        }
        .bill{
            background-color: #E8EAEA;
        }
        .color{
            background-color: #D9E5BE;
        }
        .na{
            font-size: 20px;
            color: #000;
            background-color: #FFF;
            border: #AAB0B0 solid 3px;
            border-radius: 10px;
        }
        .na:hover{
            background-color: #2E2E2E;
            color: #E3E3E3;
            font-weight: 700;
            border: #AAB0B0 solid 4px;
        }
        .warnig{
            color: red;
        }
    </style>
</head>
<body>
    <div class="container bg-light py-4">
        <div class="row">
            <div class="col">
                <h1 class="text-center">Book'n Stationery SHOP</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item me-2 py-2">
                        <a class="nav-link na" href="basket.php"><i class="bi bi-cart2"></i> SHOPPING CART</a>
                    </li>
                    <li class="nav-item py-2">
                        <a class="nav-link na" href="checkout.php"><i class="bi bi-currency-bitcoin"></i> CHECKOUT DETAILS</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row py-4 ">
            <div class="col">
                <h1 class="text-center warnig">**กรุณาตรวจสอบสินค้าและราคาก่อนสั่งซื้อ**</h1>
            </div>
        </div>

        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col">
                        <hr>
                        <h4>ข้อมูลผู้ซื้อ</h4>
                    <?php echo   '<p class="py-1">USERNAME: '.$_SESSION['username'].'</p>'; ?>
                    <?php echo   '<p>EMAIL: '.$_SESSION['email'].'</p>'; ?>
                    </div>
                </div>
                <div class="row">
                    <div class="col">

                        <!-- <div class="form-check py-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="" >
                                
                            </label>
                        </div> -->
                        <div class="row">
                            <div class="col d-flex">
                            <button type="button" class="btn btn-primary py-1 me-1" onclick="newAddress()" id="newAddressBTN">เพิ่มที่อยู่ใหม่</button>
                            <button type="button" class="btn btn-warning py-1" onclick="delAddress()" id="delAddressBTN">ลบที่อยู่</button>
                            </div>
                        </div>

                    </div>
                </div>
                <br>
                <form class="row g-2" id="forAddress" style="display: none;" method="POST" action="server.php">
                    <div class="col-5 me-3">
                        <label for="inputEmail4" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="inputEmail4" name="myname" required>
                    </div>
                    <div class="col-5 ">
                        <label for="inputEmail4" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="inputEmail4" name ="mylastName" required>
                    </div>
                    <div class="col-6 py-4">
                        <label for="inputEmail4" class="form-label">โทรศัพท์ *</label>
                        <input type="text" class="form-control" id="inputEmail4" name="phone" required>
                    </div>
                    <div class="col-10 py-1">
                        <label for="exampleFormControlTextarea1" class="form-label">บ้านเลขที่ ถนน ซอย *</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" name="houseNum"></textarea>
                    </div>
                    <div class="col-11 py-4">
                        <label for="inputEmail4" class="form-label">แขวง / ตำบล *</label>
                        <input type="text" class="form-control" id="inputEmail4" required name="tumbon">
                    </div>
                    <div class="col-11 ">
                        <label for="inputEmail4" class="form-label">เขต / อำเภอ *</label>
                        <input type="text" class="form-control" id="inputEmail4" required name="kat">
                    </div>
                    <div class="col-11 py-4">
                        <label for="inputEmail4" class="form-label">จังหวัด *</label>
                        <select class="form-select" aria-label="Default select example" name="provice" >
                            <option value="null" selected>เลือกจังหวัด</option>
                            <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                            <option value="กระบี่">กระบี่ </option>
                            <option value="กาญจนบุรี">กาญจนบุรี </option>
                            <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                            <option value="กำแพงเพชร">กำแพงเพชร </option>
                            <option value="ขอนแก่น">ขอนแก่น</option>
                            <option value="จันทบุรี">จันทบุรี</option>
                            <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                            <option value="ชัยนาท">ชัยนาท </option>
                            <option value="ชัยภูมิ">ชัยภูมิ </option>
                            <option value="ชุมพร">ชุมพร </option>
                            <option value="ชลบุรี">ชลบุรี </option>
                            <option value="เชียงใหม่">เชียงใหม่ </option>
                            <option value="เชียงราย">เชียงราย </option>
                            <option value="ตรัง">ตรัง </option>
                            <option value="ตราด">ตราด </option>
                            <option value="ตาก">ตาก </option>
                            <option value="นครนายก">นครนายก </option>
                            <option value="นครปฐม">นครปฐม </option>
                            <option value="นครพนม">นครพนม </option>
                            <option value="นครราชสีมา">นครราชสีมา </option>
                            <option value="นครศรีธรรมราช">นครศรีธรรมราช </option>
                            <option value="นครสวรรค์">นครสวรรค์ </option>
                            <option value="นราธิวาส">นราธิวาส </option>
                            <option value="น่าน">น่าน </option>
                            <option value="นนทบุรี">นนทบุรี </option>
                            <option value="บึงกาฬ">บึงกาฬ</option>
                            <option value="บุรีรัมย์">บุรีรัมย์</option>
                            <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                            <option value="ปทุมธานี">ปทุมธานี </option>
                            <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                            <option value="ปัตตานี">ปัตตานี </option>
                            <option value="พะเยา">พะเยา </option>
                            <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                            <option value="พังงา">พังงา </option>
                            <option value="พิจิตร">พิจิตร </option>
                            <option value="พิษณุโลก">พิษณุโลก </option>
                            <option value="เพชรบุรี">เพชรบุรี </option>
                            <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                            <option value="แพร่">แพร่ </option>
                            <option value="พัทลุง">พัทลุง </option>
                            <option value="ภูเก็ต">ภูเก็ต </option>
                            <option value="มหาสารคาม">มหาสารคาม </option>
                            <option value="มุกดาหาร">มุกดาหาร </option>
                            <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                            <option value="ยโสธร">ยโสธร </option>
                            <option value="ยะลา">ยะลา </option>
                            <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                            <option value="ระนอง">ระนอง </option>
                            <option value="ระยอง">ระยอง </option>
                            <option value="ราชบุรี">ราชบุรี</option>
                            <option value="ลพบุรี">ลพบุรี </option>
                            <option value="ลำปาง">ลำปาง </option>
                            <option value="ลำพูน">ลำพูน </option>
                            <option value="เลย">เลย </option>
                            <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                            <option value="สกลนคร">สกลนคร</option>
                            <option value="สงขลา">สงขลา </option>
                            <option value="สมุทรสาคร">สมุทรสาคร </option>
                            <option value="สมุทรปราการ">สมุทรปราการ </option>
                            <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                            <option value="สระแก้ว">สระแก้ว </option>
                            <option value="สระบุรี">สระบุรี </option>
                            <option value="สิงห์บุรี">สิงห์บุรี </option>
                            <option value="สุโขทัย">สุโขทัย </option>
                            <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                            <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                            <option value="สุรินทร์">สุรินทร์ </option>
                            <option value="สตูล">สตูล </option>
                            <option value="หนองคาย">หนองคาย </option>
                            <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                            <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                            <option value="อุดรธานี">อุดรธานี </option>
                            <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                            <option value="อุทัยธานี">อุทัยธานี </option>
                            <option value="อุบลราชธานี">อุบลราชธานี</option>
                            <option value="อ่างทอง">อ่างทอง </option>
                            </select>
                    </div>
                    <div class="col-6 ">
                        <label for="inputEmail4" class="form-label">รหัสไปรษณีย์ *</label>
                        <input type="text" class="form-control" id="inputEmail4" required name="post">
                    </div>
                    <div class="row py-4">
                        <div class="col justify-content-center d-flex py-4">
                            <button type="submit" class="btn btn-primary me-3" name="saveAddress">บันทึก</button>
                            <button type="submit" class="btn btn-danger" onclick="cancelNewAddress()">ยกเลิก</button>
                        </div>
                    </div>
                    
                </form>
                <form style="display: none;" id="forDelAddress" action="server.php" method="POST" >
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">ลำดับ</th>
                            <th scope="col">รายละอียดที่อยู่</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            for ($i = 0; $i < count($myAddress); $i++){
                                echo '<tr>';
                                echo '<th scope="row">'.$myindexAdress[$i].'</th>';
                                echo '<td>'.$myAddress[$i].'</td>';
                                echo '<td>';
                                echo '<button type="submit" class="btn btn-danger py-1 me-1" onclick="" id="newAddressBTN" name="GetDelete" value='. $myindexAdress[$i] .'>ลบ</button>';
                                echo '</td>';
                                echo '</tr>';
                            }
 
                            ?>
                            <!-- <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>
                                <button type="submit" class="btn btn-danger py-1 me-1" onclick="" id="newAddressBTN" name="GetDelete">ลบที่อยู่</button>
                            </td>
                            </tr> -->
                        </tbody>
                        </table>
                        <button type="button" class="btn btn-warning py-1" onclick="cancelDelAddress()">ยกเลิก</button>
                </form>
            </div>
            
            <?php
            $myBasket = array();
                $myBasketDB = new Basket();
                $basketSQL = "SELECT * from basket";
                $responesBasket = $myBasketDB->query($basketSQL);
                
            ?>


            <div class="col bill">
                <div class="row">
                    <div class="col py-4">
                        <p class="text-center">รายการสั่งซื้อของคุณ</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <table class="table">
                            <thead>
                                <th scope="col">ลำดับ</th>
                                <th scope="col ">ชื่อสินค้า</th>
                                <th scope="col">จำนวน</th>
                                <th scope="col ">ราคา</th>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                $sum = 0;
                                $amount =0;
                                    while($row = $responesBasket->fetchArray(SQLITE3_ASSOC)){
                                        if ($row['ID'] == $_SESSION['id']){
                                            $price = $row['PRICE']*$row['AMOUNT']; $sum += $price;
                                            echo '<tr>';
                                            echo '<th scope="row">'.$i.'</th>'; ++$i;
                                            echo '<td>'.$row['NAMEPRODUCT'].'</td>';
                                            echo '<td> &nbsp; x '.$row['AMOUNT'].'</td>'; $amount += $row['AMOUNT'];
                                            echo '<td>฿ '.number_format($price,2,'.','').'</td>';
                                            echo '</tr>';
                                        }
                                    }
                                ?>             
                                <tr class="color">
                                <th scope="row">รวม</th>
                                <td></td>
                                <?php echo '<td> &nbsp; x '.$amount.'</td>' ?>
                                <?php echo '<td>฿ '.number_format($sum,2,'.','').'</td>' ?>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <h5>การจัดส่ง</h5>
                    <div class="col">
                        <div class="plans">
                            <label class="plan basic-plan" for="basic" onclick="pus()">
                                <?php echo '<input checked type="radio" name="plan" id="dive1" value="'. $sum+30 .'" />'; ?>
                                <div class="plan-content">
                                    <!-- <img loading="lazy" src="https://e1.pngegg.com/pngimages/261/364/png-clipart-boite-aux-lettres-rose-boite-aux-lettres-mail.png" alt="" /> -->
                                    <div class="plan-details">
                                    <span>จัดส่งแบบปกติ</span>
                                    <p>จะได้รับสินค้าภายใน 3-7 วัน ค่าจัดส่ง ฿ 30.00</p>
                                    </div>
                                </div>
                            </label>

                            <label class="plan complete-plan py-2" for="complete" onclick="pus1()">
                            <?php  echo '<input type="radio" id="dive2" name="plan" type="submit" value="'. $sum+50 .'" />' ?>
                                <div class="plan-content">
                                    <!-- <img loading="lazy" src="https://raw.githubusercontent.com/ismailvtl/ismailvtl.github.io/master/images/potted-plant-img.svg" alt="" /> -->
                                    <div class="plan-details">
                                    <span>จัดส่งด่วนพิเศษ(EMS)</span>
                                    <p>จะได้รับสินค้าภายใน 1-3 วัน ค่าจัดส่ง ฿ 50.00</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    
                </div>
                
                <div class="row">
                    <div class="col d-flex">
                        <?php
                        $allSum = $sum+30 - $_SESSION['haveCou']; 
                            echo '<p for="'.$allSum.'" id="realPrice"> รวมทั้งหมด : ฿ '.$allSum .'</p>';
                        ?>
                    </div>
                </div>        
                <div class="row" style="background-color: #C9F1C1;">
                    <div class="col">
                    <h5>เลือกที่อยู่</h5>
                        <?php 
                        if (count($myAddress) == 0){
                            echo '<p>ไม่มีที่อยู๋ </p>';
                        }
                        for ($i = 0; $i < count($myAddress); $i++){
                            echo '<div class="form-check py-2">';
                            echo '<input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">';
                            echo '<label class="form-check-label" for="" > '.$myAddress[$i].'';
                            echo '</label>';
                            echo '</div>';
                        }

                        ?>
                    </div>
                </div>
                <div class="row py-4">
                    <div class="col">
                        <h5>เลือกวิธีชำระเงิน</h5>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" checked>
                            <label class="form-check-label" for="flexRadioDefault1">
                                เก็บเงินปลายทาง
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col py-1">
                        <form action="checkout.php" method="POST">
                            <button type="submit" class="btn btn-secondary" name="buy">สั่งซื้อ</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php 

?>


<script>
    


    function newAddress(){
        let forAddr = document.getElementById('forAddress');
        forAddr.style.display = 'flex';
        document.getElementById('newAddressBTN').style.display = 'none';
        document.getElementById('delAddressBTN').style.display = 'none';
    }

    function cancelNewAddress(){
        document.getElementById('newAddressBTN').style.display = 'flex';
        let forAddr = document.getElementById('forAddress');
        forAddr.style.display = 'none';

        document.getElementById('delAddressBTN').style.display ='flex';
    }

    function delAddress(){
        let forAddr = document.getElementById('forDelAddress');
        forAddr.style.display = 'block';
        document.getElementById('delAddressBTN').style.display = 'none';
        document.getElementById('newAddressBTN').style.display = 'none';
    }
    function cancelDelAddress(){
        let forAddr = document.getElementById('forDelAddress');
        forAddr.style.display = 'none';
        document.getElementById('delAddressBTN').style.display = 'flex';
        document.getElementById('newAddressBTN').style.display = 'flex';
    }

    function pus(){
        document.getElementById('realPrice').innerHTML = "รวมทั้งหมด : ฿ " + document.getElementById('dive1').value;
        document.getElementById('dive2').checked = false;
        document.getElementById('dive1').checked = true;
   }

   function pus1(){
        document.getElementById('realPrice').innerHTML = "รวมทั้งหมด : ฿ " + document.getElementById('dive2').value;
        document.getElementById('dive1').checked = false;
        document.getElementById('dive2').checked = true;
   }


</script>

<?php 
        if (isset($_POST['buy'])){
            echo "<script>alert('สั่งซื้อสำเร็จ');</script>";
        }


?>




<?php
  unset($_SESSION['coupon']);
  unset($_SESSION['haveCou']);
?>