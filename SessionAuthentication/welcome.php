<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
    exit;
}
if(isset($_GET['logout'])){
    $_SESSION = array();

    // Destroy the session.
    if( session_destroy()){
        // Redirect to Signin form
        session_start();

        $_SESSION['message'] = "You have been logged out!";
        $_SESSION['msg_type'] = "info";
        header("location: index.php?data");
        exit;

    }
    // session_destroy();

}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>PHP FORM HANDLING - Welcome</title>
</head>
<body>
    <div class="container">

        <div class="jumbotron text-center">
            <h1 class="text-info">WELCOME</h1>
        </div>

        <h3 class="text-center">Hello, <b><?php echo $_SESSION["username"]; ?></b>. Welcome to Lizodus' Page.</h3>
        <p class="text-center">
            <a href="welcome.php?logout" class="btn btn-danger">Sign Out of Your Account</a>
        </p>
    </div>

</body>
</html>
