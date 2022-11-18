
<?php
    session_start();
    include('server.php');
    
    $ErrorsLOGIN = array();

    if (isset($_POST['Login_Submit'])) {
        $username = $_POST['Login_username'];
        $password = $_POST['Login_password'];

        if (empty($username) || empty($password)) {
            array_push($ErrorsLOGIN, "Have !");
        }

        if (count($ErrorsLOGIN) == 0) {
            $userDB = new Users();
            $sql = "SELECT * from users";
            $ret = $userDB->query($sql);
            while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {
            if (($row['USERNAME'] == $username || $row['EMAIL'] == $username) && $row['PASSWORD'] == $password) {
                $_SESSION['username'] = $username;
                $_SESSION['id'] = $row['ID'];
                break;
            }
            }

            if (!$_SESSION['username'] && !$_SESSION['id']){
                $userDB->close();
                $_SESSION['err'] = "Yes";
                HeadderLogin();
            }else{
                $userDB->close();
                header('location: home.php');
            }

        }else{
            $_SESSION['err'] = "Yes";
            HeadderLogin();
        }
    }

    if (isset($_POST['logout'])){
        session_destroy();
        $_SESSION['show'] = 0;
        header("location: home.php");
    }
?>




