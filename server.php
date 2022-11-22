<?php
session_start();
error_reporting(0);  
    class Users extends SQLite3 {
        function __construct() {
           $this->open('database/Users.db');
         }
    }
    class Address extends SQLite3 {
        function __construct(){
            $this->open('database/Address.db');
        }
    }
    class Basket extends SQLite3 {
        function __construct(){
            $this->open('database/Baskets.db');
        }
    }

    $url = "./jsonFile/data.json";
    $response = file_get_contents($url);
    $DATA = json_decode($response);

    // $db = new Address();
    // $sql = <<<EOF
    // CREATE TABLE address
    // (ID INT NOT NULL,
    // USERNAME CHAR(255) NOT NULL,
    // NUMBER INT NOT NULL,
    // NAME TEXT NOT NULL,
    // ADDRESS TEXT NOT NULL);
    // EOF;
    // $ret = $db->exec($sql);
    // $db->close();


    // $db = new Basket();
    // $sql = <<<EOF
    // CREATE TABLE basket
    // (ID INT NOT NULL,
    // USERNAME CHAR(255) NOT NULL,
    // NAMEPRODUCT TEXT NOT NULL,
    // PRICE REAL NOT NULL,
    // INDEXJSON INT NOT NULL,
    // AMOUNT INT NOT NULL,
    // TIME CHAR(255) NOT NULL);
    // EOF;
    // $ret = $db->exec($sql);
    // $db->close();

    // $userDB = new Users();
    // $sql = "UPDATE `sqlite_sequence` SET `seq` = 0 WHERE `name` = 'users';";
    // $ret = $userDB->exec($sql);

    function HeadderLogin(){
        $_SESSION['show'] = 1;
        $_SESSION['Reregit'] = 0;
        header('location: ' . $_SESSION['page']);
    }
    
    function HeadderRegister(){
        $_SESSION['show'] = 1;
        $_SESSION['Reregit'] = 1;
        header('location: ' . $_SESSION['page']);
    }

    function addBasket($id, $username, $product,$price, $index){

        $db = new Basket();
		$sql = "SELECT * from basket";
		$ret = $db->query($sql);
        
		while($row = $ret->fetchArray(SQLITE3_ASSOC)){
			if ( $row['USERNAME'] == $username){ //มีอยู่แล้ว
				if ($row['NAMEPRODUCT'] == $product && $row['INDEXJSON'] == $index){
                    $num = $row['AMOUNT'];
                    $db->close();
                    updataAmountBasket($id, $product, $num);
                    return null;
                }
			}
		}
        
        $time =  date("Y/m/d:h:i:s");
        addNewBasket($id, $username, $product,$price, $index, $time);
        $db->close();
        header("location: ".$_SESSION['page']);
	}

    // $time =  date("Y/m/d:h:i:s");
    // addNewBasket($id, $username, $product, $index, $time);


    function updataAmountBasket($id, $product, $num){
        $ADDdb = new Basket();
        $num = $num+1;
        $sql = "UPDATE basket SET AMOUNT = $num WHERE (ID = $id and NAMEPRODUCT = '$product')";
        $ret = $ADDdb->exec($sql);
        $ADDdb->close();
        header("location: ".$_SESSION['page']);
    }

    function addNewBasket($id, $username, $product,$price, $index, $time){
        $openDB = new Basket();
        $sql =<<<EOF
            INSERT INTO basket (ID, USERNAME, NAMEPRODUCT,PRICE, INDEXJSON, AMOUNT, TIME)
            VALUES($id, '$username', '$product',$price, $index ,1, '$time');
        EOF;
        error_reporting(E_ERROR | E_PARSE);
        $ret = $openDB->exec($sql);
        $openDB->close();
        header("location: ".$_SESSION['page']);
    }

    function newAddress($id, $username, $name,$textAddress){
        $DB = new Address();
        $indexAddr = 0;
        $sql_qry = "SELECT * from address";
        $qry = $DB->query($sql_qry);
        while ($row = $qry->fetchArray(SQLITE3_ASSOC)){
            if ($id == $row['ID']){
                $indexAddr = $row['NUMBER'];
            }
            if ($row['ADDRESS'] == $textAddress && $row['ID'] == $id){
                $DB->close();
                return null;
            }
        }
        
        $indexAddr = $indexAddr+1;
        $sql =<<<EOF
            INSERT INTO address (ID, USERNAME, NUMBER, NAME, ADDRESS)
            VALUES($id, '$username',$indexAddr,'$name', '$textAddress');
        EOF;
        $ret = $DB->exec($sql);
        $DB->close();
    }


    if (isset($_POST['saveAddress'])){
        $name = $_POST['myname'] ." ". $_POST['mylastName'];
        $textAddress = $_POST['houseNum']." ".$_POST['tumbon']." ".$_POST['kat']." ".$_POST['provice']. " " . $_POST['post']." เบอร์โทร: ".$_POST['phone'] ." ชื่อผู้รับ: ". $name;
        newAddress($_SESSION['id'], $_SESSION['username'],$name, $textAddress);
        header('location: checkout.php');
    }


    function deleteAdress($id, $number){
        $db = new Address();
        $sqlDel = "DELETE from address WHERE (ID = $id and NUMBER = $number)";
        $ret = $db->exec($sqlDel);
        $db->close();
    }

    if (isset($_POST['GetDelete'])){
        deleteAdress($_SESSION['id'], $_POST['GetDelete']);
        header("location: checkout.php");
    }

    $urlCoupon = "./jsonFile/coupon.json";
    $response = file_get_contents($url);
    $copun = json_decode($response);
    
    if (isset($_POST['coopong'])){
        $Code = $_POST['mycode'];
        if ($Code == "ITKMITL"){
            $_SESSION['coupon'] = 40;
            $_SESSION['haveCou'] = 40;
            header('location: basket.php');
        }else{
            header('location: basket.php');
        }

    }

    if (isset($_POST['addBook'])){
        $mydb = new Basket();
        $id = $_SESSION['id'];
        $index = $_POST['addBook'];
        $sqlnum = "SELECT * from basket";
        $numRet = $mydb->query($sqlnum);
        $num = 0;
        while($row = $numRet->fetchArray(SQLITE3_ASSOC)){
            if ($row['ID'] == $_SESSION['id'] && $row['INDEXJSON'] == $index){
                $num = $row['AMOUNT'];
            }
        }
        ++$num;
        $sql = "UPDATE basket SET AMOUNT = $num WHERE (ID = $id and INDEXJSON = $index)";
        $ret = $mydb->exec($sql);
        $mydb->close();
        header('location: basket.php');
    
    }

    if (isset($_POST['subBook'])){
        $mydb = new Basket();
        $id = $_SESSION['id'];
        $index = $_POST['subBook'];
        $sqlnum = "SELECT * from basket";
        $numRet = $mydb->query($sqlnum);
        $num = 0;
        while($row = $numRet->fetchArray(SQLITE3_ASSOC)){
            if ($row['ID'] == $_SESSION['id'] && $row['INDEXJSON'] == $index){
                $num = $row['AMOUNT'];
            }
        }
        if ($num > 1){
            --$num;
            $sql = "UPDATE basket SET AMOUNT = $num WHERE (ID = $id and INDEXJSON = $index)";
            $ret = $mydb->exec($sql);
            $mydb->close();
            header('location: basket.php');
        }else{
            $mydb->close();
            header('location: basket.php');
        }
    }

    if(isset($_POST['deleteBasket'])){
        $userDB = new Basket();
        $delID = $_SESSION['id'];
        $indexProduct = $_POST['deleteBasket'];
        $sql = "DELETE from basket where (ID = $delID and INDEXJSON = $indexProduct);";
        $ret = $userDB->exec($sql);
        if(!$ret){
          echo $userDB->lastErrorMsg();
        }
        $userDB->close();
        header('location: basket.php');
    }

?>