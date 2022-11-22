<!DOCTYPE html>
<?php 

  include('server.php');
?>

<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/all.min.css?ver=5.13.3"
    />
    <!-- <link rel="stylesheet" href="./css_file/index.css" /> -->
    <link rel="stylesheet" href="./css_file/basket.css" />
    <title>Basket</title>
    <style>
      .over{
        text-overflow: ellipsis;
      }
      .setW{
        width: 120px;
      }
      .dr{
        margin:45% 0 0 0;
      }
      .over{
        width: 120px;
        text-overflow: ellipsis;
      }
        @media screen and (max-width : 767px) {
          .pr{
            font-size: 14px;
          }
          .min{
            display: inline;
            text-align: start;
            width: 120px;
          }
          .dr{
            margin: 25% 0 0 0;
          }
        }
    </style>
  </head>
  <body>
    <div class="container bg-light py-4">
      <div class="row">
        <div class="col">
          <h1 class="text-center">Book'n SHOP</h1>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <ul class="nav justify-content-center">
            <li class="nav-item me-2 py-2">
              <a class="nav-link na" href="basket.php"
                ><i class="bi bi-cart2"></i> SHOPPING CART</a
              >
            </li>
            <li class="nav-item py-2">
              <a class="nav-link na" href="checkout.php"
                ><i class="bi bi-currency-bitcoin"></i> CHECKOUT DETAILS</a
              >
            </li>
          </ul>
        </div>
      </div>
      <div class="row py-4">
        <div class="col">
          <h1 class="text-center warnig">
            **กรุณาตรวจสอบสินค้าและราคาก่อนสั่งซื้อ**
          </h1>
        </div>
      </div>
      
      <?php 
        $amount = 0;
        $sumPrice = 0;
      ?>

      <div class="row cart">
        <div class="col-xxl-8 col-xl-8 col-lg-12 col-sm-12 col-12"> <!-- ครึ่งแรก -->
            <div class="title">
                <div class="row">
                  <div class="col">
                      <h4><b>ตะกร้าสินค้า</b></h4>
                  </div>
                </div>
            </div>
            <div class="row">
              <div class="col">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">สิ้นค้า</th>
                    <th scope="col"></th>
                    <th scope="col">&nbsp;&nbsp;จำนวนหนังสือ</th>
                    <th scope="col">ราคา</th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                    $myBasket = new Basket();
                    $sqlBK = "SELECT * from basket";
                    $retBK = $myBasket->query($sqlBK);
                    
                    while ($row = $retBK->fetchArray(SQLITE3_ASSOC)){
                      $sumAmount = $row['AMOUNT'] * $row['PRICE']; $amount += $row['AMOUNT']; $sumPrice += $sumAmount;
                      echo '<tr>';
                      echo '<th scope="row">';
                      echo '<div class="row ">';
                      echo '<div class="col d-flex text-center align-items-center ">';
                      echo '<img  class="img-fluid me-4" src="'.$DATA[$row['INDEXJSON']]->img.'" />';
                      echo '</div>';
                      echo '</div>';
                      echo '</th>';
                      echo '<td>
                      <div class"over">
                        <p>'.$row['NAMEPRODUCT'].'</p>
                      </div>
                      </td>';
                      echo '<td>';
                      echo '<form action="server.php" method="POST">';
                      echo '<div class="col-xxl-7 col-xl-8 col-lg-6 col-12 d-flex justify-content-start min">';
                      echo '<div class="input-group ">';
                      echo '<button class="btn btn-outline-secondary btn-sm" type="submit" id="button-addon1" value='.$row['INDEXJSON'].' name="subBook" >-</button>';
                      echo '<input type="number" class="form-control text-center"  value="'.$row['AMOUNT'].'" disabled name="bookAmount">';
                      echo '<button class="btn btn-outline-secondary btn-sm" type="submit" id="button-addon1" value='.$row['INDEXJSON'].' name="addBook" >+</button>';
                      echo '</div>';
                      echo '</div>';
                      echo '</td>';
                      echo '<td class=""><h5 style="margin:45% 0 0 0;" class="pr">'.number_format($sumAmount,2,'.','').'</td></h5>';
                      echo '<td>
                            <button type="submit" class="btn btn-danger btn-sm dr" name="deleteBasket" value='.$row['INDEXJSON'].' >นำออก</button>
                            </td>';
                      echo '</form>';
                      echo '</tr>';   
                    }
                    $myBasket->close();
                  ?>
                </tbody>
              </table>
              </div>
              <div class="back-to-shop">
                <a class="BUTSback" href="index.php">&leftarrow; Back to shop</a>
              </div>
            </div>

        </div>
        
          <?php 
              $dis = 0;
              if ($_SESSION['coupon'] > 0){
                $dis = $_SESSION['coupon'];
              }
              
          ?>

            <div class="col-xxl-4 col-xl-4 col-lg-12 summary">
                <div class="text-right" >
                  <h5><b>ยอดรวม</b></h5>
                </div>
                <hr />
                <div class="row">
                  <div class="col" style="padding-left: 0"><b>มูลค่า</b></div>
                  <div class="col text-right"><?php echo number_format($sumPrice,2,'.',''); ?> บาท</div>
                </div>
                <form action="server.php" method="POST">
                  <p style="margin: 0.2rem 0"><b>คูปองส่วนลด</b></p>
                  <input style="margin: 0;" placeholder="Enter your code" class="basketBTN" name="mycode" type="text"/>
                  <button style="margin: 5% 0 5% 0;" class="BUTS BUTScoupon" type="submit" name="coopong">ใช้คูปอง</button>
                </form>
                <div class="row" style="border-top: 1px solid rgba(0, 0, 0, 0.1); padding: 2vh 0">
                  <div class="col"><b>รวม</b></div>
                  <?php echo '<div class="col text-right">'. number_format($sumPrice - $dis,2,'.','') .' บาท</div>'; ?>
                </div>
                <button class="BUTS"><a href="checkout.php" style="color: #FFF;">CHECKOUT</a></button>
              </div>
            </div>
      </div>


      
    </div>
  </body>
</html>










     