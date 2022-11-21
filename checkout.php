


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        }
        .bill{
            background-color: #E8EAEA;
        }
        .color{
            background-color: #D9E5BE;
        }
    </style>
</head>
<body>
    <div class="container bg-light py-4">
        <div class="row">
            <div class="col">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link" href="#">SHOPPING CART</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">CHECKOUT DETAILS</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row py-4 ">
            <div class="col">
                <h1 class="text-center">**กรุณาตรวจสอบสินค้าและราคาก่อนสั่งซื้อ**</h1>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="text-center">Book'n Stationery SHOP</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-sm-12">
                <div class="row">
                    <div class="col">
                        <hr>
                        <h4>ข้อมูลผู้ซื้อ</h4>
                        <p class="py-1">USERNAME: </p>
                        <p>EMAIL: </p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <h4>เลือกที่อยู่</h4>
                        <div class="form-check py-2">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                Default radioDefault radioDefault radioDefault radioDefault radioDefault radioDefault radioDefault radioDefault radio
                            </label>
                        </div>

                        <button type="button" class="btn btn-primary py-1" onclick="newAddress()">เพิ่มที่อยู่ใหม่</button>
                    </div>
                </div>
                <br>
                <form class="row g-1" id="forAddress" style="display: none;">
                    <div class="col-5 me-3">
                        <label for="inputEmail4" class="form-label">ชื่อ</label>
                        <input type="text" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-5 ">
                        <label for="inputEmail4" class="form-label">นามสกุล</label>
                        <input type="text" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-10 py-4">
                        <label for="exampleFormControlTextarea1" class="form-label">บ้านเลขที่ ถนน ซอย *</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="5"></textarea>
                    </div>
                    <div class="col-11 py-4">
                        <label for="inputEmail4" class="form-label">แขวง / ตำบล *</label>
                        <input type="text" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-11 ">
                        <label for="inputEmail4" class="form-label">เขต / อำเภอ *</label>
                        <input type="text" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-11 py-4">
                        <label for="inputEmail4" class="form-label">จังหวัด *</label>
                        <select class="form-select" aria-label="Default select example">
                            <option selected>Open this select menu</option>
                            <option value="1">One</option>
                        </select>
                    </div>
                    <div class="col-6 ">
                        <label for="inputEmail4" class="form-label">รหัสไปรษณีย์ *</label>
                        <input type="text" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="col-11 py-4">
                        <label for="inputEmail4" class="form-label">โทรศัพท์ *</label>
                        <input type="text" class="form-control" id="inputEmail4" required>
                    </div>
                    <div class="row">
                        <div class="col">
                        <button type="button" class="btn btn-primary ">บันทึก</button>
                        </div>
                    </div>
                    
                </form>
            </div>



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
                                <tr>
                                <th scope="row">1</th>
                                <td>เตรียมสอบเข้ม เข้า ม.4 ครบ 5 วิชาหลัก มั่นใจเต็ม 100</td>
                                <td> &nbsp; x 1</td>
                                <td>฿ 320.00</td>
                                </tr>
                                
                                <tr class="color">
                                <th scope="row">รวม</th>
                                <td></td>
                                <td> &nbsp; x 1</td>
                                <td>฿ 320.00</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row">
                    <h5>การจัดส่ง</h5>
                    <div class="col">
                        <div class="plans">
                            <label class="plan basic-plan" for="basic">
                                <input checked type="radio" name="plan" id="basic" />
                                <div class="plan-content">
                                    <!-- <img loading="lazy" src="https://e1.pngegg.com/pngimages/261/364/png-clipart-boite-aux-lettres-rose-boite-aux-lettres-mail.png" alt="" /> -->
                                    <div class="plan-details">
                                    <span>จัดส่งแบบปกติ</span>
                                    <p>จะได้รับสินค้าภายใน 3-7 วัน ค่าจัดส่ง ฿ 30.00</p>
                                    </div>
                                </div>
                            </label>

                            <label class="plan complete-plan py-2" for="complete">
                                <input type="radio" id="complete" name="plan" />
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
                        <p>รวมทั้งหมด : ฿ 320.00</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                            <label class="form-check-label" for="flexRadioDefault1">
                                เก็บเงินปลายทาง
                            </label>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col py-4">
                        <form>
                            <button type="button" class="btn btn-secondary">สั่งซื้อ</button>  
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>


<script>
    


    function newAddress(){
        let forAddr = document.getElementById('forAddress');
        forAddr.style.display = 'block';
    }

</script>