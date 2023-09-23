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
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,0,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@48,700,1,200" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="stylesheet" href="components/header.css">
  <title>seele</title>
</head>


<body>

   <?php include 'components/user_header.php'; ?>


   <!-- homeslider -->

   <section class="h-mainslider">
      <div class="h-slider-wrapper">
         <div class="h-slider">
            <img id="h-slide-1" src="images/webzero3.png" alt="truthear zero">
            <img id="h-slide-2" src="images/web.png" alt="truthear zero">
            <img id="h-slide-3" src="images/webzero3.png" alt="truthear zero">
         </div>
         <div class="h-slider-nav"">
            <a href="#h-slide-1"></a>
            <a href="#h-slide-2"></a>
            <a href="#h-slide-3"></a>
         </div>
      </div>

      <!-- homeslider endb-->

   </section>


   <!-- header profile end-->


   <!-- cat -->

   <div class="cat-container">
      <h2>Shop by Categories</h2>
      <div class="cat-row">
         <div class="cat-card">
            <a href="category.php?category=Headphones">
               <img src="images/joker500.png" alt="Headphones" >
            </a>
            <p>Headpohones</p>
         </div>
         <div class="cat-card">
            <a href="category.php?category=IEM">
               <img src="images/7HZ.png" alt="IEM" >
            </a>
            <p>Earpohones</p>
         </div>
         <div class="cat-card">
             <a href="category.php?category=DAC">
               <img src="images/TRUTHEAR SHIO-018.png" alt="DAC" >
            </a>
            <p>DACs\AMPs</p>
         </div>
         <div class="cat-card">
            <a href="category.php?category=.">
               <img src="images/Moondrop Little White7.webp" alt="ACCESSORIES" >
            </a>
            <p>ACCESSORIES</p>
         </div>
      </div>
   </div>

   <!-- my cat -->

   <!-- products -->
      <div class="swiper mySwiper">
         <h2>Our Products</h2>
         <div class="swiper-wrapper">
            <?php
         $select_products = $conn->prepare("SELECT * FROM `products` LIMIT 5"); 
         $select_products->execute();
         if($select_products->rowCount() > 0){
            while($fetch_product = $select_products->fetch(PDO::FETCH_ASSOC)){
         ?>
         <form action="" method="post" class="swiper-slide">
            <input type="hidden" name="pid" value="<?= $fetch_product['id']; ?>">
            <input type="hidden" name="name" value="<?= $fetch_product['name']; ?>">
            <input type="hidden" name="price" value="<?= $fetch_product['price']; ?>">
            <input type="hidden" name="image" value="<?= $fetch_product['image_01']; ?>">
            <img src="uploaded_img/<?= $fetch_product['image_01']; ?>" alt="">
            <div class="proftext">
            <div class="name"><?= $fetch_product['name']; ?></div>
            <div class="price"><span> د.ع </span><?= $fetch_product['price']; ?></div>
            </div>
            <div class="prodpbut"><a href="quick_view.php?pid=<?= $fetch_product['id']; ?>">Buy Now</a></div>
         </form>
         <?php
            }
         }else{
            echo '<p class="empty">no products found!</p>';
         }
         ?></div>
         <!-- <div class="swiper-pagination"></div>  -->
         <button><a href="shop.php">See All Products</a></button>
        </div>

        <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.5,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 2.5,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 40,
      },
      1024: {
        slidesPerView: 5,
        spaceBetween: 50,
      },
    },
  });
</script>
   <!-- swiper js end-->
        

   <!-- products -->

   <!-- Shop by brand -->
   <div class="swiper mySwiper2">
      <h2>Shop by Brand</h2>
      <div class="swiper-wrapper">
         <div class="swiper-slide">
            <a href="category.php?category=MOONDROP">
               <img src="images/logo/MOONDROP logo black.png" alt="MOONDROP" width="500" height="500">
               <p>MOONDROP</p>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="category.php?category=TRUTHEAR">
               <img src="images/logo/TRUTHEAR LOGO FULL.png" alt="TRUTHEAR" width="500" height="500">
               <p>TRUTHEAR</p>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="category.php?category=7HZ">
               <img src="images/logo/7hz logo.png" alt="7HZ" width="500" height="500">
               <p>7HZ</p>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="category.php?category=TANGZU">
               <img src="images/logo/tangzulogo.png" alt="TANGZU" width="500" height="500">
               <p>TANGZU</p>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="category.php?category=TRN">
               <img src="images/logo/TRN b.png" alt="TRN" width="500" height="500">
               <p>TRN</p>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="category.php?category=HiBy">
               <img src="images/logo/Hiby black.png" alt="HiBy" width="500" height="500">
               <p>HiBy</p>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="category.php?category=Kiwi Ears">
               <img src="images/logo/kiwi kogo b.png" alt="Kiwi Ears" width="500" height="500">
               <p>Kiwi Ears</p>
            </a>
         </div>
         <div class="swiper-slide">
            <a href="category.php?category=QKZ">
               <img src="images/logo/qkz lolo.png" alt="QKZ" width="500" height="500">
               <p>QKZ</p>
            </a>
         </div>
      </div>
   </div>
   <!-- Shop by brand -->

   <!-- swiper js -->
    <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper2", {
    slidesPerView: 3,
    spaceBetween: 10,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
    breakpoints: {
      640: {
        slidesPerView: 5,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 4,
        spaceBetween: 20,
      },
      1024: {
        slidesPerView: 8,
        spaceBetween: 20,
      },
    },
  });
</script>
   <!-- swiper js end-->

   <!-- articles 
      <section class="articles">
         <h2>Articles</h2>
         <div class="artiflex">
            <div class="artiitem">
               <a href="google.com">
                  <img src="images/7HZ-Salnotes-ZERO-Black-01_800x (2).png" alt="" hight="250" width="150">
               </a>
               <div class="artitext">
                  <span class="artidate">2000/5/22</span>
                  <h4>Moondrop void</h4>
                  <p>goooooooood hehehehe</p>
                  <a href="keepreading">Read</a>
               </div>
            </div>

            <div class="artiitem">
               <a href="google.com">
                  <img src="images/7HZ-Salnotes-ZERO-Black-01_800x (2).png" alt="" hight="250" width="150">
               </a>
               <div class="artitext">
                  <span class="artidate">2000/5/22</span>
                  <h4>Moondrop void</h4>
                  <p>goooooooood hehehehe</p>
                  <a href="keepreading">Read</a>
               </div>
            </div>

            <div class="artiitem">
               <a href="google.com">
                  <img src="images/7HZ-Salnotes-ZERO-Black-01_800x (2).png" alt="" hight="250" width="150">
               </a>
               <div class="artitext">
                  <span class="artidate">2000/5/22</span>
                  <h4>Moondrop void</h4>
                  <p>goooooooood hehehehe</p>
                  <a href="keepreading">Read</a>
               </div>
            </div>
         </div>
         <a class="readmore" href="google.com">Read more</a>
      </section>
    articles end -->

   <?php include 'components/footer.php'; ?>

   <script src="js/script.js"></script>

</body>
</html>