<?php
$username = null;
$password = null;
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if(!empty($_POST["username"]) && !empty($_POST["password"])) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if($username == 'dmitrii' && $password == 'dmitriipass1234') {
            session_start();
            $_SESSION["authenticated"] = 'true';
            $_SESSION["username"] = $_POST["username"];
            header('Location: index.php');
        }
        else {
            header("Location: login.php?m=2");
        }
    } else {
        header('Location: login.php');
    }
}
?>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
   <title>Login - IoT Smart Home</title>
   <link rel="stylesheet" href="old/bootstrap.min.css">
   <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
   <link rel="stylesheet" href="fonts/fontawesome-all.min.css">
   <link rel="stylesheet" href="css/custom.css">
</head>

<body style="background-image: url('images/login-bckg.jpg'); background-size: cover;
background-repeat: no-repeat;">
   <div class="container">
       <div class="row justify-content-center">
           <div class="col-md-9 col-lg-6 col-xl-6">
               <div class="card shadow-lg o-hidden border-0 my-5" style="background-color: rgba(0,0,0,0.5) !important;">
                   <div class="card-body p-0">
                       <div class="row">
                           <div class="col-lg-12 col-xl-12">
                               <div class="p-5">
                                   <div class="text-center">
                                       <h4 class="text-white mb-4">IoT Smart Home</h4>
                                   </div>
                                   <?php if(!empty($_GET["m"])) {
                                     $message = $_GET["m"];
                                     if ($message == '1') {
                                       echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                                       Successfully logged out.
                                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                       </div>';
                                     }
                                     if ($message == '2') {
                                       echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
                                       Username or password is incorrect.
                                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                       <span aria-hidden="true">&times;</span>
                                       </button>
                                       </div>';
                                     }
                                   } ?>
                                   <form class="user" method="post">
                                       <div class="form-group"><input class="form-control form-control-user" type="text" name="username" placeholder="Username"></div>
                                       <div class="form-group"><input class="form-control form-control-user" type="password" id="exampleInputPassword" placeholder="Password" name="password"></div>
                                       <div class="form-group">
                                           <div class="custom-control custom-checkbox small">
                                               <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label text-white" for="formCheck-1">Remember Me</label></div>
                                           </div>
                                       </div><button class="btn btn-primary btn-block btn-user login_btn font-weight-bold" type="submit">Login</button>
                                       <hr>
                                       <p class="text-center text-white">Only authenticated users can access the IoT smart home control system.</p>
                                       <hr>
                                   </form>

                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
   </div>
   <script src="js/jquery.js"></script>
   <script src="old/bootstrap.min.js"></script>
   <script src="js/jquery.easing.min.js"></script>
   <script src="js/dismiss.js"></script>
</body>

</html>
