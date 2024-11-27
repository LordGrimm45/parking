<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8" />
    <title>Log in</title>
    <link rel="stylesheet" href="stylelogin.css">
</head>
<body>
    <div class="loginbox">
        <h2 class="title" >LogIn</h2>
        <form action="">
           <p>Username</p>
            <input type="email" placeholder="Enter Email">
            <p>Password</p>
            <input type="password" placeholder="Enter Password">
            <input type="submit" name="LogIn" value="LogIn">
            <input type="submit" name="createaccount" value="createaccount">
            
        </form>
    </div>
</body>
</html>

<?php

$email = $password = "";
$emailerr = $passworderr = "";

if($_SERVER["REQUEST_METHOD"] = "POST"){
    if(empty($_POST["email"])){
        $emailerr = "email is required";
    }else
    {
        $email = $_POST["email"];

        if(empty($_POST["password"])){

            $passworderr = "password is required";
        }else
        {
            $password = $_POST["password"];

    }
}
}
?>

