<?php include('./navbar.php'); ?>

  <div class="container mt-5 text-center">
    <h1>Welcome to the Sasindu Dashboard!</h1>
    <p>This is the main content of your home page.</p>
    <a class="btn btn-primary" href="employee.php">Go to Employee Details</a>
    <a class="btn btn-primary" href="./inventory/inventoryhome.php">Go to Inventory</a>
    <a class="btn btn-primary" href="#">Go to Salary Details</a>
  </div>

  <div id="carouselExample" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="image1.png" alt="Image 1">
      </div>
      <div class="carousel-item">
        <img src="image2.png" alt="Image 2">
      </div>
      <div class="carousel-item">
        <img src="image3.png" alt="Image 3">
      </div>
    </div>
  </div>

  <script>
  $(document).ready(function() {
    // Initialize the carousel
    $('.carousel').carousel({
      interval: 3000, // Set the interval (in milliseconds) for auto-rotation
    });
  });
</script>



<?php include('./footer.php'); ?>