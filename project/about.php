<?php

include 'config.php';

session_start();

$user_id = $_SESSION['user_id'];

if(!isset($user_id)){
   header('location:login.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'header.php'; ?>

<div class="heading">
   <h3>about us</h3>
   <p> <a href="home.php">home</a> / about </p>
</div>

<section class="about">

   <div class="flex">

      <div class="image">
      <img src="images/about-img.jpg" alt="about us" style="max-width: 100%; height: auto; opacity: 0.7; background-color: white;">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>At [Bookshop Name], we're more than just a bookstore; we're your trusted source for quality reads and literary treasures.</p>
            <p> With a passion for books and a commitment to excellence, we curate an inspiring collection to delight book lovers of all kinds.</p>
         <a href="contact.php" class="btn">contact us</a>
      </div>

   </div>

</section>

<section class="reviews">

   <h1 class="title">client's reviews</h1>

   <div class="box-container">

      <div class="box">
         <img src="images/pic-1.png" alt="">
         <p>I've found my literary haven at Pustak. The friendly staff, cozy ambiance, and diverse book selection make it my go-to place for bookish adventures. Truly a gem for book lovers!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>John cena</h3>
      </div>

      <div class="box">
         <img src="images/pic-2.png" alt="">
         <p>For us it is a bookworm's paradise! The warm atmosphere and personalized recommendations from the knowledgeable staff make each visit a delightful experience. I can't resist leaving without a new treasure.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Angel</h3>
      </div>

      <div class="box">
         <img src="images/pic-3.png" alt="">
         <p>As a lifelong reader, I can confidently say that Pustak is a trusted source for quality books. Their commitment to curating a wide range of genres and providing excellent service sets them apart. Highly recommended!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Kushal</h3>
      </div>

      <div class="box">
         <img src="images/pic-4.png" alt="">
         <p>I stumbled upon Pustak a few months ago, and it's become my favorite escape. The welcoming environment and carefully curated selection of books have reignited my passion for reading. This place is a real gem!</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Sita</h3>
      </div>

      <div class="box">
         <img src="images/pic-5.png" alt="">
         <p>I've never been disappointed with my purchases from them. The staff's love for literature is evident in their recommendations, and their dedication to promoting local authors is commendable. It's more than just a bookshop; it's a community.</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Ram</h3>
      </div>

      <div class="box">
         <img src="images/pic-6.png" alt="">
         <p>This is where I discovered hidden literary gems I would have never found elsewhere. It's more than a bookstore; it's a cultural hub that celebrates the joy of reading. A must-visit for anyone in search of a true book-lover's haven..</p>
         <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
         </div>
         <h3>Rita</h3>
      </div>

   </div>

</section>









<?php include 'footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>
