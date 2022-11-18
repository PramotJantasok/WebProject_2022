<?php
    class Users extends SQLite3 {
        function __construct() {
           $this->open('./database/Users.db');
         }
    }
    class Address extends SQLite3 {
        function __construct(){
            $this->open('./database/Address.db');
        }
    }
    class Basket extends SQLite3 {
        function __construct(){
            $this->open('./database/Baskets.db');
        }
    }
    
    // $userDB = new Users();
    // $sql = "UPDATE `sqlite_sequence` SET `seq` = 0 WHERE `name` = 'users';";
    // $ret = $userDB->exec($sql);

    function HeadderLogin(){
        $_SESSION['show'] = 1;
        $_SESSION['Reregit'] = 0;
        header('location: home.php');
    }
    
    function HeadderRegister(){
        $_SESSION['show'] = 1;
        $_SESSION['Reregit'] = 1;
        header('location: home.php');
    }


?>