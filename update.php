<?php include('./navbar.php'); ?>

    <form action="./script.php" method="post" class="m-5">
        <h1 class=" fw-bold">Update  Employee</h1>

        <?php
            $Emp_id=$_GET['Emp_id'];
            $sql="SELECT * FROM Employee WHERE Emp_id='$Emp_id'";
            $res=mysqli_query($con,$sql);

            if(mysqli_num_rows($res)>0){
                $row=mysqli_fetch_assoc($res);
                ?>

                     <div class="form-group">
						<label class="form-label fw-bold">Employee Id</label>
						<input type="text" name="Emp_id" required class="form-control" readonly value="<?php echo $row['Emp_id']; ?>">
					</div>

					<div class="form-group">
						<label class="form-label fw-bold">Employee name</label>
						<input type="text" name="Empname"  required class="form-control" value="<?php echo $row['Empname']; ?>">
					</div>

					<div class="form-group">
						<label class="form-label fw-bold">age</label>
						<input type="text" name="age" required class="form-control" value="<?php echo $row['age']; ?>">
					</div>

					<div class="form-group">
						<label class="form-label fw-bold">Address</label>
						<input type="text" name="Address" required class="form-control" value="<?php echo $row['Address']; ?>">
					</div>

					<div class="form-group">
						<label class="form-label fw-bold">NIC</label>
						<input type="text" name="NIC"  required class="form-control" value="<?php echo $row['NIC']; ?>">
					</div>

					<div class="form-group">
						<label class="form-label fw-bold">T.P </label>
						<input type="text" name="TPno"  required class="form-control" value="<?php echo $row['TPno']; ?>">
					</div>

                   

                    <input type="submit" name="update"class="btn btn-success m-2" value="Update">
                    <a class="btn btn-secondary m-2"  href="./home.php">Go Back</a>
                <?php

            }
        ?>

        
    </form>

<?php include('./footer.php'); ?>