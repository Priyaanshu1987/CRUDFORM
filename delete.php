<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    $sno=$_GET['deleteid'];
    $sql="delete from `crudinfo` where sno=$sno";
    $result=mysqli_query($con,$sql);
    if($result){
       // echo "Deleted Successfully";
        header('location:display.php');
    }else{
        die(mysqli_error($con));
    }
}

?>