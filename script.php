<?php
    include('./dbconnect.php');
    session_start();

    //login script
    if(isset($_POST['login'])){
        $un=mysqli_real_escape_string($con,$_POST['username']);
        $pw=mysqli_real_escape_string($con,$_POST['password']);

        $sql="SELECT * FROM user WHERE username='$un' AND password='$pw'";
        $res=mysqli_query($con,$sql);

        if(mysqli_num_rows($res)>0){
            $_SESSION['user']=$un;
            header('location:home.php');
        }else{
            echo "Failed to login.";
        }
    }

    //create student
    if(isset($_POST['create'])){
        $Emp_id=mysqli_real_escape_string($con,$_POST['Emp_id']);
        $Empname=mysqli_real_escape_string($con,$_POST['Empname']);
        $age=mysqli_real_escape_string($con,$_POST['age']);
        $address=mysqli_real_escape_string($con,$_POST['Address']);
        $NIC=mysqli_real_escape_string($con,$_POST['NIC']);
        $tpno=mysqli_real_escape_string($con,$_POST['TPno']);

        $sql="INSERT INTO employee(Emp_id,Empname,age,Address,NIC,TPno) VALUES('$Emp_id','$Empname','$age','$address','$NIC','$tpno')";
        $res=mysqli_query($con,$sql);

        if($res){
            header('location:home.php');
        }else{
            echo "Failed to add employee.";
        }
    }

    //update script
    if(isset($_POST['update'])){
        $Emp_id=mysqli_real_escape_string($con,$_POST['Emp_id']);
        $Empname=mysqli_real_escape_string($con,$_POST['Empname']);
        $age=mysqli_real_escape_string($con,$_POST['age']);
        $address=mysqli_real_escape_string($con,$_POST['Address']);
        $NIC=mysqli_real_escape_string($con,$_POST['NIC']);
        $tpno=mysqli_real_escape_string($con,$_POST['TPno']);
        
        $sql="UPDATE employee SET Emp_id='$Emp_id', Empname='$Empname',age='$age',Address='$address', NIC='$NIC', TPno='$tpno' WHERE Emp_id='$Emp_id'";
        $res=mysqli_query($con,$sql);

        if($res){
            header('location:employee.php');
        }else{
            echo "Failed to update employee.";
        }
    }

?>