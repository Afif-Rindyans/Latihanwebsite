<?php
  $BASE_URL="../../..";

  include "$BASE_URL/app/dotenv.php";
  include "$BASE_URL/app/default_path.php";
  include "$BASE_URL/app/config/database/connect.php";

  if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') {
    $protocol = 'https';
  } else {
    $protocol = 'http';
  }

  if (isset($_POST['save'])) {
    $username=mysqli_real_escape_string($connection, $_POST['username']);
    $email=mysqli_real_escape_string($connection, $_POST['email']);
    $password=mysqli_real_escape_string($connection, $_POST['password']);

    if (
      $username == "" || $username == null ||
      $email == "" || $email == null ||
      $password == "" || $password == null
    ) {
      echo "<script> alert('Isi form dengan lengkap!') </script>";
    } else {
      $save=mysqli_query($connection, "INSERT INTO user VALUES('$username','$email','$password','user')");
      
      if ($save){
        header("Location: $protocol://localhost/$path/page/auth/login");
      } else{
        echo "<script> alert('Gagal membuat akun!') </script>";
      }
    }

  }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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

      body {
        animation: transition 0.8s;
      }

      @keyframes transition { 
        from {
          opacity: 0;
          transform: translate(-100px);
        }
        to {
          opacity: 2;
          transform: translate(0);
        }
      }
    </style>

    <title>Daftar Pengguna Baru</title>
  </head>

  <body style="background-image: url('<?=$BASE_URL?>/public/bukit.jpg'); background-size: cover; background-repeat: no-repeat;">
    <section id="portofolio " class="portofolio kartu">
      <div class="container">
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <div class="row">
              <div class="col-lg-5 d-none d-lg-block bg-register-image"></div>
                <div class="col-lg-7">
                  <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                    </div>
                          
                    <form class="user" action="" method="post">
                      <div class="form-group">
                          <input type="text" name="username" class="form-control form-control-user" id="exampleInputEmail" placeholder="Username" minlength="2">
                      </div>

                      <div class="form-group">
                        <input type="email" name="email" class="form-control form-control-user" id="exampleInputEmail" placeholder="Email Address" minlength="11">
                      </div>

                      <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" minlength="8">
                      </div>
                            
                      <button type="submit" name="save" value="Save"  class="btn btn-primary btn-block">Buat Akun</button>
                      
                      <hr>

                      <a href="index.html" class="btn btn-google btn-user btn-block">
                        <i class="fab fa-google fa-fw"></i> Register with Google
                      </a>
                      <a href="index.html" class="btn btn-facebook btn-user btn-block">
                        <i class="fab fa-facebook-f fa-fw"></i> Register with Facebook
                      </a>
                    </form>

                    <hr>
                    
                    <div class="text-center">
                      <a class="small" href="forgot-password.html">Forgot Password?</a>
                    </div>
                    <div class="text-center">
                      <a class="small" href="<?=$path?>/page/auth/login">Already have an account? Login!</a>
                    </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var transisiElements = document.querySelectorAll('.card');
      
      transisiElements.forEach(function(element, index) {
        setTimeout(function() {
          element.classList.add('muncul');
        }, index * 500); 
      });
    });
  </script>
</html>