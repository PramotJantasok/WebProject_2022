<?php
    session_start();
    include('server.php');

    $Errors =  array();
    
    if (isset($_POST['Register_submit'])){
        $username = $_POST['UserRegister'];
        $email = $_POST['EmailRegister'];
        $password = $_POST['PasswordRegister'];

        if (empty($username) || empty($email) || empty($password)){
            array_push($Errors, "Have empty !");
        }
  
        $db = new Users();
        $reqSQL = "SELECT * from Users";
        $ret = $db->query($reqSQL);
        while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            if ($row['USERNAME'] == $username || $row['EMAIL'] == $email){
                array_push($Errors, "Same user or Email !");
            }
        }

        if (count($Errors) == 0){
            $sql =<<<EOF
                    INSERT INTO Users (USERNAME, PASSWORD, EMAIL)
                    VALUES('$username', '$password', '$email');
                    EOF;
            error_reporting(E_ERROR | E_PARSE);
            $ret = $db->exec($sql);
            $db->close();
            HeadderLogin();
        }
        else{
            HeadderRegister();
            $db->close();
        }
    }







?>