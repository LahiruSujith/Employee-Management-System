<?php include('./navbar.php'); ?>

    <h1 class="text-center">Employee Details Dashboard</h1>

    
    <table class="table table-stripped m-4">
        <a class="btn btn-success m-2"href="./create.php">Add New Employee</a>
        <thead>
            <tr>
                <th>name</th>
                <th>age</th>
                <th>Address</th>
                <th>NIC</th>
                <th>T.P no</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $sql="SELECT * FROM employee";
            $res=mysqli_query($con,$sql);

            if(mysqli_num_rows($res)>0){
                while($row=mysqli_fetch_assoc($res)){
                    $Emp_id=$row['Emp_id'];
                    echo "<tr>";
                    echo "<td>".$row['Empname']."</td>";
                    echo "<td>".$row['age']."</td>";
                    echo "<td>".$row['Address']."</td>";
                    echo "<td>".$row['NIC']."</td>";
                    echo "<td>".$row['TPno']."</td>";
                    echo "<td>";
                    echo "<a class='btn btn-primary btn-sm' href='./update.php?Emp_id=$Emp_id'>Update</a>";
                    echo "<a class='btn btn-danger m-2 btn-sm' href='./delete.php?Emp_id=$Emp_id'>Delete</a>";
                }
            }
        ?>
        </tbody>
    </table>

<?php include('./footer.php'); ?>