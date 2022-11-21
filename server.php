<?php
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

    function addBasket($id, $username, $product, $index){

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
        addNewBasket($id, $username, $product, $index, $time);
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

    function addNewBasket($id, $username, $product, $index, $time){
        $openDB = new Basket();
        $sql =<<<EOF
            INSERT INTO basket (ID, USERNAME, NAMEPRODUCT, INDEXJSON, AMOUNT, TIME)
            VALUES($id, '$username', '$product', $index, 1, '$time');
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
            if ($id == $row['id']){
                $indexAddr = $row['indexAddress'];
            }
        }
        ++$indexAddr;
        $sql =<<<EOF
            INSERT INTO address (ID, USERNAME, NUMBER, NAME, ADDRESS)
            VALUES($id, '$username',$indexAddr,'$name', '$textAddress');
        EOF;
        $ret = $DB->exec($sql);
        $DB->close();
    }



?>