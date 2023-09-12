<?php include('./navbar.php'); ?>

    <form action="./script.php" method="post" class="m-5">
        <h1 class=" fw-bold">Update  Product</h1>

        <?php
            $Emp_id=$_GET['Product_id'];
            $sql="SELECT * FROM Products WHERE Emp_id='$product_id'";
            $res=mysqli_query($con,$sql);

            if(mysqli_num_rows($res)>0){
                $row=mysqli_fetch_assoc($res);
                ?>

                     <div class="form-group">
						<label class="form-label fw-bold">Product Id</label>
						<input type="text" name="Emp_id" required class="form-control" readonly value="<?php echo $row['Emp_id']; ?>">
					</div>

					<div class="form-group">
						<label class="form-label fw-bold">Product name</label>
						<input type="text" name="Empname"  required class="form-control" value="<?php echo $row['Empname']; ?>">
					</div>

					<div class="form-group">
						<label class="form-label fw-bold">Quentity</label>
						<input type="text" name="age" required class="form-control" value="<?php echo $row['age']; ?>">
					</div>

                    <input type="submit" name="update"class="btn btn-success m-2" value="Update">
                    <a class="btn btn-secondary m-2"  href="./inventoryhome.php">Go Back</a>
                <?php

            }
        ?>

        
    </form>

<?php include('./footer.php'); ?>