<?php include('./navbar.php'); ?>

    <form action="./script.php" method="post" class="m-5">
        <h1 class=" fw-bold">Create New Product</h1>

        <div class="form-group">
            <label class="form-label fw-bold">Product Id</label>
            <input type="text" name="Emp_id" placeholder="Product Id" required class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label fw-bold">Product name</label>
            <input type="text" name="Empname" placeholder="Product name" required class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label fw-bold">Quentity</label>
            <input type="text" name="age" placeholder="Enter Quantity" required class="form-control">
        </div>


        <input type="submit" name="create"class="btn btn-success m-2" value="Create">
        <a class="btn btn-secondary m-2"  href="./inventoryhome.php">Go Back</a>
    </form>

<?php include('./footer.php'); ?>