<?php
    include('server.php');
?>


<?php 
    $userDB = new Users();
    $sql = "UPDATE `sqlite_sequence` SET `seq` = 0 WHERE `name` = 'users';";
    $ret = $userDB->exec($sql);
    
    if (isset($_POST['Register_submit'])){
        $username = $_POST['UserRegister'];
        $email = $_POST['EmailRegister'];
        $password = $_POST['PasswordRegister'];
  
        $db = new Users();
        $sql =<<<EOF
                INSERT INTO Users (USERNAME, PASSWORD, EMAIL)
                VALUES('$username', '$password', '$email');
                EOF;
        error_reporting(E_ERROR | E_PARSE);
        $ret = $db->exec($sql);
        $db->close();
    }

?>