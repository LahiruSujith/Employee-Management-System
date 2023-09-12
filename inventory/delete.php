<?php
    include('./dbconnect.php');

    $Emp_id=$_GET['Product_id'];
    $sql="DELETE FROM products WHERE Emp_id='$Emp_id'";
    $res=mysqli_query($con,$sql);

    if($res){
        header('location:inventory.php');
    }else{
        echo "failed to delete Product.";
    }
?>