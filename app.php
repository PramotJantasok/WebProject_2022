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

    // $userDB = new Users();
    // $sql = "UPDATE `sqlite_sequence` SET `seq` = 0 WHERE `name` = 'users';";
    // $ret = $userDB->exec($sql);
    
    // if (isset($_POST['Register_submit'])){
    //     $username = $_POST['UserRegister'];
    //     $email = $_POST['EmailRegister'];
    //     $password = $_POST['PasswordRegister'];
  
    //     $db = new Users();
    //     $sql =<<<EOF
    //             INSERT INTO Users (USERNAME, PASSWORD, EMAIL)
    //             VALUES('$username', '$password', '$email');
    //             EOF;
    //     error_reporting(E_ERROR | E_PARSE);
    //     $ret = $db->exec($sql);
    //     $db->close();
    // }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
    <title>Document</title>
    <style>
        a{
            text-decoration: none;
            color: white;
        }
    </style>
</head>
<body>
    <div class="container">
    <h1 class="text-center">USER ACCOUT</h1>
    <table class="table">
        <thead class="bg-info">
            <tr>
            <th scope="col">ID</th>
            <th scope="col">USERNAME</th>
            <th scope="col">EMAIL</th>
            <th scope="col">PASSWORD</th>
            </tr>
        </thead>
        <tbody>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr> -->
            <?php
                $userDB = new Users();
                $sql ="SELECT * from users";
                $ret = $userDB->query($sql);
                while($row = $ret->fetchArray(SQLITE3_ASSOC)) {
                    echo "<tr>";
                    echo "<td>".$row['ID']."</td>";
                    echo "<td>".$row['USERNAME']."</td>";
                    echo "<td>".$row['EMAIL']."</td>";
                    echo "<td>".$row['PASSWORD']."</td>";
                    echo "</tr>";
                }
                $userDB->close();
             ?>
        </tbody>
    </table>
    <form method="POST" action="app.php">
        <div class="row">
            <div class="col col-1 d-flex">
                <input class="form-control" type="number" placeholder="KEY ID" name="Del_ID">
            </div>
            <div class="col col-2">
                <button type="submit" class="btn btn-danger" name="del">Delete</button>
                <button type="reset" class="btn btn-info"><a href="app.php">Reset</a></button>
            </div>
            
        </div>
        </div>
    </form>

    

</body>
</html>


<?php
    if (isset($_POST['del'])){
        $userDB = new Users();
        $delID = $_POST['Del_ID'];
        $sql = "DELETE from users where ID = $delID;";
        $ret = $userDB->exec($sql);
        if(!$ret){
          echo $userDB->lastErrorMsg();
        } else {
           echo $userDB->changes(), " Record deleted successfully<br>";
        }
        $userDB->close();
    }
?>