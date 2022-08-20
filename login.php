<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_logintest');

if (isset($_POST['submit'])) {
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['pw']);
    if ($username == "" or $password == "") {
        $alert = "Masukan Email Dan Password";
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
</head>

<body>
    <style>
        .alert {
            color: red;
            font-size: 14px;
            position: relative;
            z-index: 3;
            top: -14px;
        }
        .userinp:focus > .userlab   {
            font-size: 12px;
        }

        .forminp {
            position: relative;
            display: grid;
            border: none;
        }

        .forminp:focus .userinp {
            border: none;
        }
    </style>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-header text-bg-dark ps-3">
                        <h1>Login</h1>
                    </div>
                    <div class="card-body">
                        <form class="forminp" action="" method="post">
                            
                            <label for="username" class="pb-1 userlab">Username</label>
                            <input type="text" autocomplete="no" id="username" class="form-control mb-3 userinp" name="username" placeholder="Masukan Username Anda">
                            <label for="pw" class="pb-1">Password</label>
                            <input type="password" class="form-control" id="pw" name="pw" placeholder="Masukan Password Anda">
                            <p class="alert"><?php if (isset($alert)) {
                                                    echo "$alert";
                                                } ?></p>
                            <div class="form-group text-end">
                                <button class="btn btn-primary " type="masuk" name="submit">Masuk</button>
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