<?php 

$op = array 
(
    "options"=>array
    (
        "min_range"=>5,
        "max_range"=>100
    )
    );

function ero($errno , $errstr){
    echo "Error";
}

 $f =filter_input(INPUT_POST, "txt");
if(isset($_POST['rem'])){
    if(filter_var($f ,FILTER_VALIDATE_INT,FILTER_SANITIZE_STRING)){
        echo $f;
    }
    else{
        throw new Exception("ero" , E_USER_NOTICE);
    }
}
?>

<form method="POST">
<input type="text" name="txt">
<input type="submit" value="delete" name="rem">
</form>