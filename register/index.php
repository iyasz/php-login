<?php

$conn = mysqli_connect('localhost', 'root', '', 'db_logintest');

if (isset($_POST['btn-register'])) {
    $nama = htmlspecialchars($_POST['nama']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);
    $fixpassword = htmlspecialchars($_POST['fixpassword']);

    if ($nama == "" or $username == "" or $password == "" or $fixpassword = "") {
        $alert = "Masukan Data Dengan Lengkap!";
    } else {
        $data = mysqli_query($conn, "SELECT * FROM tbl_user where username ='$username'");
        if (mysqli_num_rows($data) >= 1) {
            $alert = "Username Sudah Ada";
        } else {
            mysqli_query($conn, "INSERT INTO tbl_user (`nama`,`username`,`password`) VALUES ('$nama','$username','$password')");
            header('location: ../login/index.php');
        }
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
</head>

<body>
    <style>
        .header h1 {
            font-size: 25px;
            font-weight: bold;
            font-family: sans-serif;
        }

        .form-regis .alrt p {
            height: 30px;
            font-size: 14px;
            color: red;
            position: relative;
            top: -8px;
        }

        .reg {
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

        .already {
            font-size: 12px;
            margin-top: 20px;
        }

        .form-regis input {
            margin-bottom: 15px;
        }

        .form-regis input:focus {
            box-shadow: none;
            outline: none;
        }
    </style>

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card shadow-lg">
                    <div class="card-body">
                        <div class="header text-center mt-3">
                            <h1>Sign Up</h1>
                        </div>
                        <form action="" method="post">
                            <div class="form-regis">
                                <label for="nama">Nama <i class="bi bi-person"></i></label>
                                <input type="text" id="nama" name="nama" autocomplete="off" placeholder="Masukan Nama Anda" class="form-control">

                                <label for="user">Username <i class="bi bi-person-plus"></i></label>
                                <input type="text" id="user" name="username" autocomplete="off" placeholder="Masukan Username Anda" class="form-control">

                                <label for="pw">Password <i class="bi bi-key"></i></label>
                                <input type="password" id="pw" name="password" placeholder="Masukan Password Anda" class="form-control">

                                <label for="fixpw">Confirm Password <i class="bi bi-lock"></i></label>
                                <input type="password" id="fixpw" name="fixpassword" placeholder="Masukan Password Anda Lagi" class="form-control">
                                <div class="alrt">
                                    <p><?php if (isset($alert)) {
                                            echo $alert;
                                        } ?></p>
                                </div>
                                <div class="but text-center">
                                    <button class="btn btn-primary reg" type="submit" name="btn-register">Register</button>
                                    <p class="already">Already have an Account? <a class="text-decoration-none" href="../login/">Login</a></p>
                                </div>
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