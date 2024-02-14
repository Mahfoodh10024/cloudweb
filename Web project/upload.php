<?php

function errorfile(){
    echo "NOT UPLOADED";
}

$host = 'localhost';
$user = 'root';
$pas = '';
$mdb = 'test';

$conn = mysqli_connect($host, $user , $pas , $mdb);


if($conn){
    echo "connected  <br>";
}
else{
    die('something went wrong');
}


if(isset($_POST['upload'])){
    
    $name = $_POST['name'];

    $pName =$_FILES['img']["name"];

    $tName = $_FILES['img']["tmp_name"];
    $type =$_FILES['img']['type'];
    $size = $_FILES['img']['size'];

    $dir = '/css';

    move_uploaded_file($tName, $dir .'/'. $pName);

    $add = "INSERT INTO file (name,type,value,file) VALUES ('$name','$type','$size','$pName')";
    
    if(mysqli_query($conn,$add)){
        echo "added";
    } 
    else{
        set_error_handler("errorfile" , E_USER_ERROR);
    }

}

?>

<form method="POST" enctype="multipart/form-data">
<input type="file" name="img" required/>

<input type="text" name="name" placeholder="File name">

<input type="submit" value="upload" name="upload">
</form>
