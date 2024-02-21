<?php

include 'koneksi.php';
session_start();

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = htmlspecialchars($_POST["username"]);
    $password = htmlspecialchars($_POST["password"]);

   
    $query = "SELECT role FROM login WHERE username='$username' AND password='$password'";
    $result_role = mysqli_query($koneksi, $query);

    if ($result_role) {
        $row_role = mysqli_fetch_assoc($result_role);
        $Role = $row_role['role'];

        $sql = "SELECT * FROM login WHERE username='$username' AND password='$password' AND role ='$Role'";
        $stmt = mysqli_prepare($koneksi, $sql);
        mysqli_stmt_execute($stmt);

        $result = mysqli_stmt_get_result($stmt);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            if ($row['role'] == 'admin') {
                $_SESSION["username"] = $username;
                $_SESSION["role"] = "admin";
                header("Location: /Latihan/admin/admindm.php");
                exit();    

            }if ($row['role'] == 'head_admin') {
                    $_SESSION["username"] = $username;
                    $_SESSION["role"] = "head_admin";
                    header("Location: /Latihan/headadmin/headds.php");
                    exit();  

                }if ($row['role'] == 'ceo') {
                    $_SESSION["username"] = $username;
                    $_SESSION["role"] = "ceo";
                    header("Location: dashboard.php");
                    exit();  

                }if ($row['role'] == 'commissioner') {
                    $_SESSION["username"] = $username;
                    $_SESSION["role"] = "commissioner";
                    header("Location: /Latihan/komisaris/komisds.php");
                    exit();
                    
                }if ($row['role'] == 'developer') {
                    $_SESSION["username"] = $username;
                    $_SESSION["role"] = "developer";
                    header("Location: dashboard.php");
                    exit();  

            } if ($row['role'] == 'customer_service') {
                $_SESSION["username"] = $username;
                $_SESSION["role"] = "customer_service";
                header("Location: /Latihan/cs/chatcs.php");
                exit();    
            } 
            
            else {
                $_SESSION["username"] = $username;
                header("Location: index.php");
                exit();
            }
        } else {
            
            header("Location: index.php?error=1");
            exit();
        }
    } else {
     
        header("Location: index.php?error=2");
        exit();
    }
}

mysqli_close($koneksi);
?>





<style>
.card{
opacity: 0.9;
box-shadow: rgba(0, 0, 0, 0.25) 0px 54px 55px, rgba(0, 0, 0, 0.12) 0px -12px 30px, rgba(0, 0, 0, 0.12) 0px 4px 6px, rgba(0, 0, 0, 0.17) 0px 12px 13px, rgba(0, 0, 0, 0.09) 0px -3px 5px;
}

.portofolio .card {
    opacity: 0;
    transform: translate(400px, 0);
    transition: opacity 0.5s ease-out, transform 0.7s ease-out;
}

.portofolio .card.muncul {
    opacity: 1;
    transform: translate(0, 0);
}

body{
    animation: transition 0.8s;
}

@keyframes transition { 

    from{
        opacity: 0;
        transform: translate(-100px);
    }
    to{
        opacity: 2;
        transform: translate(0);
    }
    
}


</style>

<script>
        document.addEventListener('DOMContentLoaded', function() {
            var transisiElements = document.querySelectorAll('.card');

            transisiElements.forEach(function(element, index) {
                setTimeout(function() {
                    element.classList.add('muncul');
                }, index * 500); //delay
            });
        });

  

    </script>

<script>


        </script>









<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-image: url('images/bukit.jpg'); background-size: cover; background-repeat: no-repeat;">

  <section id="portofolio " class="portofolio kartu">
  <div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-6 d-none d-lg-block bg-login"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                            </div>
                            <form id="loginForm" class="user" method="post">
                                <div class="form-group">
                                    <input type="email"  name="username" class="form-control form-control-user"
                                        id="exampleInputEmail" aria-describedby="emailHelp"
                                        placeholder="Enter Email Address...">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user"
                                        id="exampleInputPassword" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Remember
                                            Me</label>
                                    </div>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">Login</button>
                                <hr>
                                <a href="index.html" class="btn btn-google btn-user btn-block">
                                    <i class="fab fa-google fa-fw"></i> Login with Google
                                </a>
                                <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                    <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                </a>
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="forgot-password.html">Forgot Password?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="register.php">Create an Account!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>
    </section>



    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>