<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_logintest');

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    if ($username == "" or $password == "") {
        $alert = "Masukan Email Dan Password";
    }
    else {
        $userCheck = mysqli_query($conn, "SELECT * from tbl_admin where username = '$username' ");
        $passCheck = mysqli_query($conn, "SELECT * from tbl_admin where password = '$password' ");
        if(mysqli_num_rows($userCheck) <= 0){
            $alert = "Username anda belum terdaftar";
        }else {
            if(mysqli_num_rows($passCheck) <= 0){
                $alert = "Password anda salah";
            } else {
                header('Location: ../index.php');
            }
        }
    }
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <style>
        .alert {
            color: red;
            font-size: 13px;
            letter-spacing: 0.4px;
            top: -14px;
            height: 19px;
        }

        .forminp .pasinp,
        .forminp .userinp {
            border: none;
            border-bottom: solid 2px #d9d9d9;
            border-radius: 0;
            box-shadow: none;
        }

        .userinp:focus, .pasinp:focus {
            border-color: #007AFF;
        }
        .title h3{
            margin-bottom: 39px;
            font-weight: lighter;
            letter-spacing: 0.8px;
            text-align: center;
        }

        .useric, .pasic {
            font-size: 15px;
            opacity: 60%;
        }

        .btn-msk {
            background: #007AFF;
            border: none;
            outline: none;
            box-shadow: none;
            color: whitesmoke;
            padding: 6px 85px;
            border-radius: 25px;
            font-family: sans-serif;
            letter-spacing: 0.5px;
        }

        .btn-msk:hover {
            background: #007AF4;
        }

        .tb p {
            font-size: 12px;
        }
        .tb a {
            color: #007AFF;
        }
    </style>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="title align-self-center">
                            <p class="text-center">
                                <img class="mb-4 mt-3 " width="80px" src="../asset/avatar.svg" alt="avatar">
                            </p>
                            <h3>Sign In To YaszCrud</h3>
                        </div>
                        <form class="forminp" action="" method="post">
                            <label for="username" class="pb-1 userlab">Username</label>
                            <i class="bi bi-person-fill useric"></i>
                            <input type="text" autocomplete="off" id="username" class="form-control mb-3 userinp" name="username" placeholder="Masukan Username Anda">
                            <label for="pw" class="pb-1 paslab">Password</label>
                            <i class="bi bi-lock pasic"></i>
                            <input type="password" class="form-control pasinp" id="pw" name="password" placeholder="Masukan Password Anda">
                            <p class="alert"><?php if (isset($alert)) {
                                                    echo "$alert";
                                                } ?></p>
                            <div class="form-group text-center">
                                <button class="btn btn-primary btn-msk" type="submit" name="submit">Masuk</button>
                            </div>
                            <div class="mt-4 text-center tb">
                                <p>Don't have an account? <a class=" text-decoration-none" href="../register/">Signup Now</a></p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>

</body>

</html>