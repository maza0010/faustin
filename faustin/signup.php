<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <!-- Optional theme -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta charset="UTF-8">
        <title>Register</title>
    </head>
    <body>
        <?php
        // put your code here
        //extract($_POST);
        $formName = $_post["signUpForm"];
        $name = $_post['firstName'];
        $lastName = $_post["lastName"];
        $email = $_post["email"];
        $country = $_post["country"];
        $password = $_post["password"];
        $passwordConfirm = $_post["cPassword"];
        $btnSubmit = $_post["btnSub"];
        
        /* validation testing */
        if (isset($_post['btnSubmit'])){
            echo '<h1>clicked</h1>';
            if(!empty($_post['name'])){
                echo 'Name field is empty'; 
            }
            else {
                echo "ahoo";
            }
        }
        ?>
        <?php include 'includes/Header.php'; ?>
        <div class="container">
            <h1 class="navbar-header">
        Register here and enjoy the full features of the site at no cost</h1>
        </div>
        <form id="signUpForm" method="post" action="<?php //echo htmlspecialchars($_SERVER["PHP_SELF"]);?>formProcess.php">
            <div class="form-group">
                <label for="firstName">First Name:</label>
                <input type="name" class="form-control" id="firstName" placeholder="First Name">
            </div>
            <div class="form-group">
                <label for="lastName">Last Name:</label>
                <input type="name" class="form-control" id="lastName" placeholder="Last Name">
            </div>            
            <div class="form-group">
                <label for="email">Email address:</label>
                <input type="email" class="form-control" id="email1" placeholder="Email address">
            </div>
            <div class="form-group">
                <label for="country">Country:</label>
                <input type="text" class="form-control" id="country" placeholder="country">
            </div>
            <div class="form-group">
                <label for="Password">Password:</label>
                <input type="password" class="form-control" id="Password" placeholder="Password">
            </div>
            <div class="form-group">
                <label for="cPassword">Confirm password:</label>
                <input type="password" class="form-control" id="cPassword" placeholder="Confirm Password">
            </div>
            <button type="submit" class="btn btn-primary" value="submit" id="btnSub">Register</button>
            <button type="reset" class="btn btn-primary" value="reset">Clear</button>
        </form>
        <?php include 'includes/footer.php'; ?>
    </body>
</html>
