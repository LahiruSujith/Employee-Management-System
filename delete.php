<?php
    include('./dbconnect.php');

    $Emp_id=$_GET['Emp_id'];
    $sql="DELETE FROM employee WHERE Emp_id='$Emp_id'";
    $res=mysqli_query($con,$sql);

    if($res){
        header('location:employee.php');
    }else{
        echo "failed to delete employee.";
    }
?>