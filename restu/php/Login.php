<?php

if(isset($_POST['rem'])){
    setcookie("user" , "setting" , strtotime("+1 year"));
}


if(isset($_POST['btn'])){

    
    session_start();
    $_SESSION['name'] = "deliver";
    $_SESSION['ID'] = 112;
    
// ----------------------------------------------

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

?> 