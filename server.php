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

    // $db = new Basket();
    // $sql = <<<EOF
    // CREATE TABLE basket
    // (ID INT NOT NULL,
    // USERNAME CHAR(255) NOT NULL,
    // NAMEPRODUCT TEXT NOT NULL,
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

    function addBasket($id, $username, $product, $index){

        $db = new Basket();
		$sql = "SELECT * from basket";
		$ret = $db->query($sql);
        $check = 1;
		while($row = $ret->fetchArray(SQLITE3_ASSOC)){
			if ($row['ID'] == $id && $row['USERNAME'] == $username){
				if ($row['NAMEPRODUCT'] == $product && $row['INDEXJSON'] == $index){
                    $num = $row['AMOUNT'];
                    updataAmountBasket($id, $product, $num+1);
                    return null;
                }
			}
		}


	}


    function updataAmountBasket($id, $product, $num){
        $db = new Basket();
        $sql = "UPDATE basket SET AMOUNT = $num WHERE (ID == $id and NAMEPRODUCT == $product)";
        $ret = $db->exec($sql);
        $db->close();
    }

?>