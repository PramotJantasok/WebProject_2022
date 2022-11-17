<?php
    class Users extends SQLite3 {
        function __construct() {
           $this->open('Users.db');
         }
    }
    class Address extends SQLite3 {
        function __construct(){
            $this->open('Address.db');
        }
    }
    class Basket extends SQLite3 {
        function __construct(){
            $this->open('Baskets.db');
        }
    }


?>