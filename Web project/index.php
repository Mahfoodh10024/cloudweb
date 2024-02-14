<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/Login.css">

    <style>
        html body h4{
        color: red;
        position: absolute;
        left:610px;
        right: 0;
        top: 150px;
        width: 300px;
        height: 30px;
        font-weight: lighter;
        background-color: #f93f0422;
        display: flex;
        justify-content: center;
        align-items: center;
        border-radius: 3px;
}   
    </style>
</head>
<body>
    
    <form action="" method="post">
        <div class="container">
            <h3>Sign in</h3>

            <input class="in1" name="username"  type="text" required>
            <span id="s1">username</span>
    
            <input class="in6" type="password" name="password" required >
            <div class="show-it"></div>
            <span id="s2">Password</span>
    
            <a href="temp.html">Forget password?</a>
    
            <input id="sub" type="submit" name="btn" value="Sing in">
    
            <input type="checkbox" name="rem" value="remember" class="chk">
            <label for="">Remember Me</label>
            <p>Don't have an account? <a href="Create.php">Sing up</a></p>
        </div>
    </form>

</body>
<script src="js/create.js" as="script"></script>
<?php
	include "InitailDB.php";

if(isset($_POST['btn'])){

    $name = $_POST['username'];
    $password = $_POST['password'];


$Insert = $con->prepare("SELECT * FROM `users` WHERE first_name = ? AND password = ? ");
$Insert-> execute(array($name , $password));
$count = $Insert->rowCount();



if($count > 0){
    header("location: home.php");
}else{
	echo "<h4 >Wrong email Or password</h4>";
}

}

?>
</html>