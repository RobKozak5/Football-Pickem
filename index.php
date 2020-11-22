<!DOCTYPE html>
<html lang="en">
 
<?php
// Includes
    include './Controller/DB_include.php';
    include_once './Model/User.php';

// DB Connection
    $database = new Database();
    $db = $database->connect();

// Initialize objects
    $user = new User($db);

if(isset($_POST['pwd-reset'])){
    session_start();
    header("location:./Controller/ForgotPassword.php"); 
}
else{
// Login Check
if(isset($_POST['login'])) {
    if(empty($_POST["username"]) || empty($_POST["password"])) {  
        $message = 'All fields are required';  
    } else { 
    $uname = $_POST['username'];
    $uPass = $_POST['password'];
    if($user->login($uname,$uPass)) {
        session_start();
        $_SESSION["login"] = 'YES';
        $_SESSION["username"] = $_POST["username"];   
        header("location:./dashboard.php"); 
        }
    else
        {
            $message = "Incorrect Login!";
        } 
    }
}
}
?>

<head>  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="./View/Public/fonts/circular-std/style.css">
    <link rel="stylesheet" href="./View/Public/libs/css/style.css">
    <link rel="stylesheet" href="./View/Public/libs/css/custom.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/a2caf9c750.js" crossorigin="anonymous"></script>

    <title>Login</title>

    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>

<body>
<!-- Login form -->
    <div class="splash-container">
        <div class="card ">
            <div class="login-header"><img src="Images/NFL_logo.png"></div>
            <div class="card-header text-center"><a class="navbar-brand">Welcome to football pickem!</a></div>
            <div class="card-body">
                <form method="post">
                    <?php if(isset($message)){ ?>
                    <div class="alert alert-danger">
                        <i class="glyphicon glyphicon-warning-sign"></i> &nbsp; <?php echo $message; ?>
                    </div>
                    <?php } ?>
                    <!-- User Information -->
                        <!-- Admin Name -->
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="username" Name="username" type="text" placeholder="Email" autocomplete="off">
                            </div>
                        <!-- /Admin Name -->
                        
                        <!-- Admin Password -->
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="password" Name="password" type="password" placeholder="Password">
                            </div>
                        <!-- /Admin Password -->
                    <!-- /User Information -->
                    
                    <button type="submit" Name="login" class="btn btn-primary btn-lg btn-block" Value="login">Sign in</button>
                </form>
                <br>
            </div>
            <center><label>Forgot Password? <a  type="submit" Name="pwd-reset" Value="pwd-reset" href="Controller/ForgotPassword.php?reset=yes">Click Here</a></center>
        </div>
    </div>
<!-- /Login form -->
</body>
 
</html>