<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>logged_card</title>
</head>
<style>
    * {
        margin: 0;
        padding: 0
    }

    body {
        background-color: #eee;
    }

    .box {
        padding: 35px;
        text-align: center;
    }

    .button {
        font-size: 1em;
        padding: 10px;
        background-color: #333;
        color: #333;
        text-decoration: none;
        border-radius: 5px;
        cursor: pointer;
        transition: all 0.3s ease-out;
    }

    .button:hover {
        color: #fff;
        background-color: #a0a0a0;
    }

    .overlay {
        position: fixed;
        top: 0;
        bottom: 0;
        left: 0;
        right: 0;
        background: rgba(0, 0, 0, 0.7);
        transition: opacity 500ms;
        visibility: hidden;
        opacity: 0;
    }

    .overlay:target {
        visibility: visible;
        opacity: 1;
    }

    .popup {
        margin: 70px auto;
        padding: 20px;
        background: #fff;
        border-radius: 5px;
        width: 30%;
        position: relative;
        transition: all 0.5s ease-in-out;
    }

    .popup .close {
        position: absolute;
        top: 20px;
        right: 30px;
        transition: all 200ms;
        font-size: 30px;
        font-weight: bold;
        text-decoration: none;
        color: #333;
    }

    .popup .close:hover {
        color: #333;
    }

    .popup .content {
        max-height: 20%;
    }

    @media screen and (max-width: 1000px) {
        .box {
            width: 70%;
        }

        .popup {
            width: 70%;
        }
    }

    .card {
        width: 500px;
        background-color: #efefef;
        border: none;
        cursor: pointer;
    }

    .profile {
        border-radius: 50%;
    }

    .btn {
        height: 150px;
        width: 150px;
        border-radius: 50%
    }

    .name {
        font-size: 22px;
        font-weight: bold
    }

    .idd {
        font-size: 14px;
        font-weight: 600
    }

    .idd1 {
        font-size: 12px
    }

    .number {
        font-size: 22px;
        font-weight: bold
    }

    .btn1 {
        height: 40px;
        width: 150px;
        border: none;
        background-color: #000;
        color: #fff;
        font-size: 15px
    }
    .join {
    font-size: 14px;
    color: #a0a0a0;
    font-weight: bold
    }

</style>

<body>
    <div class="box">
        <a class="button" href="#popup1">Press</a>
    </div>

    <div id="popup1" class="overlay">
        <div class="popup">
            <h3>My Profile</h3>
            <a class="close" href="#">&times;</a>
            <div class="content">
                <div class="container mt-4 mb-4 p-3 d-flex justify-content-center">
                    <div class="card p-4">
                        <div class=" image d-flex flex-column justify-content-center align-items-center">
                            <button class="btn btn-secondary"> 
                                <img class="profile justify-content-center align-items-center" src="https://preview.redd.it/1zbe7a0j3kt61.png?auto=webp&s=89247fc063eff076859ba310a7971a4bdb772233" height="125" width="125" />
                            </button>
                            <span class="name mt-3">Ratchanon Kathip</span>
                            <span class="idd">64070220@kmitl.ac.th</span>
                            <div class="d-flex flex-row justify-content-center align-items-center gap-2"> <span class="idd1 mt-3">#2545</span></div>
                            <div class=" d-flex mt-2"> <button class="btn1">Log Out</button> </div>
                            <div class=" px-2 rounded mt-4 date "> <span class="join">BookShop@ITKMITL</span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>