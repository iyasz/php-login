<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_logintest');

if(isset($_POST['ch'])){
    $userCheck = htmlspecialchars($_POST['inpUser']);
    $userChecka = htmlspecialchars($_POST['inpUsera']);
    if($userCheck == "" or $userChecka == ""){
        $alert = "Masukkan Password baru";
    } else{
        mysqli_query($conn, "UPDATE tbl_user WHERE password = '$userCheck'");
        header('location: ../login.index.php');
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
                                <h2>New Password</h2>
                                <h5>Enter your new password</h5>
                            </div>
                            <input type="password" placeholder="Enter new password" autocomplete="off" name="inpUser" class="form-control inp mb-3">
                            <input type="password" placeholder="Enter new password again" autocomplete="off" name="inpUsera" class="form-control inp">
                            <p><?php if(isset($alert)){
                                echo $alert;
                            } ?></p>
                            <div class="footer text-center">
                                <button name="btn-ch" class="btn btn-primary btn-con">Confirm</button>
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