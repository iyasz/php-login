<?php

include "../koneksi.php";

if(isset($_POST['btn-con'])){
    $email = htmlspecialchars($_POST['inpEmail']);
    if($email == ""){
        $alert = "Masukkan Username Anda";
    } else{
        $emailCheck = mysqli_query($conn, "SELECT * FROM tbl_user where username = '$email'");
        if(mysqli_num_rows($emailCheck) <= 0){
            $alert = "Username anda belum terdaftar";
        } else {
            header('location: newpw.php');
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Masukkan Email</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <style>
        form .inp:focus {
            box-shadow: none;
            outline: none;
        }
        form > p {
            height: 20px;
            color: #FF1E00;
            font-size: 13px;
        }
        .header h5 {
            font-size: 13px;
            margin-bottom: 20px;
        }
        .footer .btn-con {
            box-shadow: none;
            outline: none;
            border-radius: 2px;
            padding: 5px 94px;
        }
        .footer .btn-con:active{
            box-shadow: none;
        }
        .footer p {
            font-size: 14px;
            margin-top: 14px;
        }
        .parent {
            position: relative;
            top: 135px;
        }
    </style>
    <div class="container parent">
        <div class="row justify-content-center ">
            <div class="col-lg-5">
                <div class="card shadow-lg">
                    <div class="card-body ">
                        <form action="" method="post">
                            <div class="header text-center">
                                <h2>Forgot Password?</h2>
                                <h5>Enter your username address</h5>
                            </div>
                            <input type="text" placeholder="Enter username address" autocomplete="off" name="inpEmail" class="form-control inp">
                            <p><?php if(isset($alert)){
                                echo $alert;
                            } ?></p>
                            <div class="footer text-center">
                                <button name="btn-con" class="btn btn-primary btn-con">Continue</button>
                                <p>Remember? <a class="text-decoration-none " href="../login/">Go Back</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html>