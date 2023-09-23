<?php

include 'components/connect.php';

session_start();

if(isset($_SESSION['user_id'])){
   $user_id = $_SESSION['user_id'];
}else{
   $user_id = '';
};

include 'components/wishlist_cart.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
  <link rel="stylesheet" href="css/style.css">
  <title>Blog</title>
</head>


<body>
  
<?php include 'components/user_header.php'; ?>

    <!-- blog  -->
  <section class="blogthing">
  <h2>seele's blog</h2>
  <div class="blog">
    <div class="blogitem">
      <a href="blogpost.php">
        <img src="images/7HZ-Salnotes-ZERO-Black-01_800x (2).png" alt="">
      </a>
      <span>2000/5/22</span>
      <h3>how to say nigger</h3>
    </div>

    <div class="blogitem">
      <a href="blogpost.php">
        <img src="images/7HZ-Salnotes-ZERO-Black-01_800x (2).png" alt="">
      </a>
      <span>2000/5/22</span>
      <h3>how to say nigger</h3>
    </div>

    <div class="blogitem">
      <a href="blogpost.php">
        <img src="images/7HZ-Salnotes-ZERO-Black-01_800x (2).png" alt="">
      </a>
      <span>2000/5/22</span>
      <h3>how to say nigger</h3>
    </div>

    <div class="blogitem">
      <a href="blogpost.php">
        <img src="images/7HZ-Salnotes-ZERO-Black-01_800x (2).png" alt="">
      </a>
      <span>2000/5/22</span>
      <h3>how to say nigger</h3>
    </div>

    
  </div>
</section>  

  <?php include 'components/footer.php'; ?>

   <script src="js/script.js"></script>


  <!-- Blog end -->

</body>
</html>