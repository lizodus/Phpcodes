<?php  include_once 'process.php';  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/FBT.png" type="image/x-icon">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <title>Lizodus' Page</title>
</head>
<body>
<div class="container">
                <div class="jumbotron text-center">
                    <h1 class="text-info">Lizodus' Page</h1>
                    <a href="../index.php" class="btn btn-primary m-auto">Back to Home</a>
                </div>
    <!-- all input are being processed in process.php -->

            <?php

            $user = $pass = "";
            // success message and data display of user
            if (isset($_GET['login'])): ?>



            <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                <?php

                    echo $_SESSION['message'];
                    unset($_SESSION['message']);
                   $user =  $_SESSION['userDetail']['name'];
                   $pass = $_SESSION['userDetail']['password'];

                ?>
            </div>


            <div class="row justify-content-center mt-5">

                <form action="process.php" method="post" enctype="multipart/form-data">
                    <h2>Login</h2>
                    <h1 style="margin-left: 50%;margin-right:50%;margin-bottom:10%">Login</h1>

                     <div>
                     <label for="name" style="margin-right: 4%;">Username</label>
                     <input type="text" name="name" style="width:30%; border:0px">
                     <hr style="width:30%">
                        <!-- username -->
                    </div>

                    <div>
                    <label for="password" style="margin-right: 4%;">Password</label>
                    <input type="password" name="password" style="width:30%;border:0px" required>
                    <hr  style="width:30%">
                        <!-- password -->
                    </div>

                    <input type="hidden" name="user" value="<?= $user;?>">
                    <input type="hidden" name="pass" value="<?= $pass; ?>">
                    <div class="form-group">
                        <button type="submit" class="btn btn-success" name="login">Save</button>
                        <p>Don't have an account? <a href="index.php">SignUp here</a>.</p>
                    </div>
                </form>

            </div>

            <?php elseif(isset($_GET['signin'])): ?>
                <div class="row justify-content-center mt-5">

                    <form action="process.php" method="post" enctype="multipart/form-data">
                        <h2>Login</h2>

                        div>
                        <label for="name" style="margin-right: 4%;">Username</label>
                        <input type="text" name="name" style="width:30%; border:0px">
                        <hr style="width:30%">
                           <!-- username -->
                       </div>

                       <div>
                       <label for="password" style="margin-right: 4%;">Password</label>
                       <input type="password" name="password" style="width:30%;border:0px" required>
                       <hr  style="width:30%">
                           <!-- password -->
                       </div>

                        <input type="hidden" name="user" value="<?= $user;?>">
                        <input type="hidden" name="pass" value="<?= $pass; ?>">
                        <div class="form-group">
                            <button type="submit" class="btn btn-success" name="login">Save</button>
                            <p>Don't have an account? <a href="index.php">SignUp here</a>.</p>
                        </div>
                    </form>

                 </div>

            <?php else: ?>

                <?php if (isset($_GET['data'])): ?>



                <div class="alert alert-<?=$_SESSION['msg_type'] ?>">
                    <?php

                        echo $_SESSION['message'];
                        unset($_SESSION['message']);

                    ?>
                </div>


            <div class="row justify-content-center mt-5">
                <form action="process.php" method="post" enctype="multipart/form-data">
                    <h2>SignUp</h2>
                    <p>Please fill this form to create an account.</p>

                    <<div>
                    <label for="name" style="margin-right: 4%;">Username</label>
                    <input type="text" name="name" style="width:30%; border:0px">
                    <hr style="width:30%">
                    </div>

                    <div>
                    <label for="email" style="margin-right: 4%;">Email</label>
                    <input type="email" name="email" style="width:30%;border:0px">
                    <hr  style="width:30%">
                    </div>

                    <div>
                    <label for="password" style="margin-right: 4%;">Password</label>
                    <input type="password" name="password" style="width:30%;border:0px">
                    <hr  style="width:30%">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="register" value="Submit">
                        <input type="reset" class="btn btn-default" value="Reset">

                        <p>Already have an account? <a href="index.php?signin">Login here</a>.</p>
                    </div>
                </form>

            </div>
            <?php
                else:
            ?>
            <div class="row justify-content-center mt-5">
                <form action="process.php" method="post" enctype="multipart/form-data">
                    <h2>SignUp</h2>
                    <p>Please fill this form to create an account.</p>

                    <div>
                    <label for="name" style="margin-right: 4%;">Username</label>
                    <input type="text" name="name" style="width:30%; border:0px">
                    <hr style="width:30%">
                    </div>

                    <div>
                    <label for="email" style="margin-right: 4%;">Email</label>
                    <input type="email" name="email" style="width:30%;border:0px">
                    <hr  style="width:30%">
                    </div>

                    <div>
                    <label for="password" style="margin-right: 4%;">Password</label>
                    <input type="password" name="password" style="width:30%;border:0px">
                    <hr  style="width:30%">
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-primary" name="register" value="Submit">
                        <input type="reset" class="btn btn-default" value="Reset">

                        <p>Already have an account? <a href="index.php?signin">Login here</a>.</p>
                    </div>
                </form>
        <?php endif; ?>
        <?php endif; ?>

    </div>
    </div>
</body>
</html>
