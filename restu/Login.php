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

            <input class="in1" name="email"  type="text" required>
            <span id="s1">Email</span>
    
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


 <!-- <?php

if(isset($_POST['rem'])){
    setcookie("user" , "setting" , strtotime("+1 year"));
}


if(isset($_POST['btn'])){

    
    session_start();
    $_SESSION['Username'] = "deliver";
    $_SESSION['ID'] = 112;
    

    $host = 'localhost';
    $user = 'root';
    $pas = '';
    $mdb = 'restaurant';

    $conn = mysqli_connect($host, $user , $pas , $mdb);

    if($conn){
    }
    else{
        die('something went wrong');
    }

    $password = $_POST['password'];
    $username = $_POST['username'];

    $sql = "select * from users_accounts where  first_name='$username' and password='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
    header("location: restaurant.php");
    echo "welcome" .$username;
    echo "hello";
    } else {
    echo "<h4 class='ph'>Username or Password is wrong</h4>"; 
    }
}

?> -->

</html>