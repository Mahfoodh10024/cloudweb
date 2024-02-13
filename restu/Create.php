<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>
    
    <link rel="stylesheet" href="css/Create.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/eos-icons@latest/dist/css/eos-icons.css' />
    <link href="https://fonts.googleapis.com/css2?family=Shantell+Sans&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,400,0,0" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>
<body>
    
    <form action="" method="post">
        <div class="container" id="cont">
            <h3>Sign up</h3>

            <input class="in1 af" type="text" name="fn" required>
            <span class="material-symbols-outlined icon1">person</span>
            <span id="s1">First name</span>
    
            <input class="in2" type="text" name="mn" required >
            <span class="material-symbols-outlined icon2">person</span>
            <span id="s2">Mid name</span>

            <input class="in3" type="text" name="ln" required >
            <span class="material-symbols-outlined icon3">person</span>
            <span id="s3">Last name</span>

            <input class="in4" type="email" name="em" required >
            <span class="material-symbols-outlined icon4">mail</span>
            <span id="s4">Email</span>

            <input type="text" name="pas" class="in5" required>
            <span class="material-symbols-outlined icon5">location_on</span>
            <span id="s5">Address</span>

            <input class="in6" type="password" autocomplete="additional-name" name="adr" required >
            <div class="show-it"></div>
            <span id="s6">Password</span>
    
            <input id="sub" type="submit" name="btn"  value="Sing up">
            <div class="strength"></div> 
            <p>have account? <a href="Login.php" target="_self">Sing in</a></p>

            <span id="s7"></span>
        </div>
    </form>

</body>
<script src="js/create.js" as="script"></script>
<script src="js/strength.js"></script>

<!-- <?php 

if(isset($_POST['btn'])){
    $host = 'localhost';
    $user = 'root';
    $pas = '';
    $mdb = 'restaurant';
    $conn = mysqli_connect($host, $user , $pas , $mdb);

    if($conn){
        echo 'connection successful'.'<br>';
    }
    else{
        die('something went wrong');
    }

    $fname = $_POST['fn'];
    $mname = $_POST['mn'];
    $lname = $_POST['ln'];
    $email = $_POST['em'];
    $password =$_POST['pas'];
    $address = $_POST['adr'];

    // filter_input(INPUT_POST , "em" , FILTER_VALIDATE_EMAIL , FILTER_SANITIZE_EMAIL);

    $add = "insert into najm1 values ('$fname' , '$mname' , '$lname' , '$email' , '$password' , '$address')";
    $Throw = mysqli_query($conn , $add);
    if($Throw){
        echo " add successful";
        header("location: Login.php");
    }
    else{
        echo mysqli_error($conn);
    }
    $conn->close();
}


?> -->

</html>