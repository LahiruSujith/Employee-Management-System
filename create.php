<?php include('./navbar.php'); ?>

    <form action="./script.php" method="post" class="m-5">
        <h1 class=" fw-bold">Create New Employee</h1>

        <div class="form-group">
            <label class="form-label fw-bold">Employee Id</label>
            <input type="text" name="Emp_id" placeholder="Enter Id" required class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label fw-bold">Employee name</label>
            <input type="text" name="Empname" placeholder="Enter name" required class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label fw-bold">age</label>
            <input type="text" name="age" placeholder="Enter age" required class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label fw-bold">Address</label>
            <input type="text" name="Address" placeholder="Enter Address" required class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label fw-bold">NIC</label>
            <input type="text" name="NIC" placeholder="Enter NIC" required class="form-control">
        </div>

        <div class="form-group">
            <label class="form-label fw-bold">T.P </label>
            <input type="text" name="TPno" placeholder="Enter phone number" required class="form-control">
        </div>


        <input type="submit" name="create"class="btn btn-success m-2" value="Create">
        <a class="btn btn-secondary m-2"  href="./home.php">Go Back</a>
    </form>

<?php include('./footer.php'); ?>