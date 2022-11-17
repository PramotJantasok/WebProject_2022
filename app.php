<?php
    class Register extends SQLite3 {
        function __construct() {
           $this->open('Users.db');
         }
    };

    class Address extends SQLite3 {
        function __construct(){
            $this->open('Address.db');
        }
    };

    class Basket extends SQLite3 {
        function __construct(){
            $this->open('Baskets.db');
        }
    };


    // Regiter_submit

    if (isset($_POST['Register_submit'])){
        $username = $_POST['UserRegister'];
        $email = $_POST['EmailRegister'];
        $password = $_POST['PasswordRegister'];

        $db = new Register();
        $sql =<<<EOF
                INSERT INTO Users (USERNAME, PASSWORD, EMAIL)
                VALUES('$username', '$password', '$email');
                EOF;
        error_reporting(E_ERROR | E_PARSE);
        $ret = $db->exec($sql);
        $db->close();
    }
    
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
</head>
<body>
    <div class="container">
    <h1 class="text-center">USER ACCOUT</h1>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">First</th>
            <th scope="col">Last</th>
            <th scope="col">Handle</th>
            </tr>
        </thead>
        <tbody>
            <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
            </tr>
            <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
            </tr>
            <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
            </tr>
        </tbody>
    </table>
    </div>

</body>
</html>