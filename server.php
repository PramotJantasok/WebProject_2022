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


?>