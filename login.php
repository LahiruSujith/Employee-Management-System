<?php include('./navbar.php'); ?>

    <form class="m-4 p-2" method="post" action="./script.php">
        <h1 class="text-center p-2">Login</h1>
        <label class="form-label fw-bold">Username</label>
        <input class="form-control" type="text" name="username" placeholder="Enter your name.." required>

        <label class="form-label fw-bold">Password</label>
        <input class="form-control" type="password" name="password"placeholder="Enter your password.."required>

        <input type="submit" name="login" value="Login" class="btn btn-danger mt-3">
    </form>

<?php include('./footer.php'); ?>