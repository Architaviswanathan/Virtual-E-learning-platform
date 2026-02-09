<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
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
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>


<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about.jpg" alt="">
      </div>

      <div class="content">
         <h3>Why KEC LearnSphere?</h3>
         <p class="mb-4">
                        At KEC LearnSphere, we believe in accessible, innovative learning experiences that adapt to your
                        schedule and learning style. Join us in embracing the future of education and unlock your
                        potential with our immersive online courses.
                    </p>         <a href="courses.php" class="inline-option-btn" >our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"  style="color: #fb873f;"></i>
         <div>
            <h3 style="color:rgb(19, 18, 18);">+1k</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"  style="color: #fb873f;"></i>
         <div>
            <h3  style="color:rgb(19, 18, 18);">+25k</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"  style="color: #fb873f;"></i>
         <div>
            <h3 style="color:rgb(19, 18, 18);">+5k</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"  style="color: #fb873f;"></i>
         <div>
            <h3 style="color:rgb(19, 18, 18);">100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">What Our Students Say</h1>

   <div class="box-container">

      <div class="box">
         <p>"The courses are well-structured and easy to follow. The instructors are knowledgeable and supportive. Highly recommended!"</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="Student Picture">
            <div>
               <h3>Aarav </h3>
               <div class="stars">
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star-half-alt" style="color: #fb873f;"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I gained practical knowledge that helped me land my first job in the tech industry. The community support is amazing!"</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="Student Picture">
            <div>
               <h3>Priya </h3>
               <div class="stars">
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star-half-alt" style="color: #fb873f;"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"The hands-on projects were the best part of the course. I now feel confident in my coding skills and problem-solving abilities!"</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="Student Picture">
            <div>
               <h3>Gupta</h3>
               <div class="stars">
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star-half-alt" style="color: #fb873f;"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I love the interactive teaching approach! The mentors are always ready to help, making learning much easier and enjoyable."</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="Student Picture">
            <div>
               <h3>Ananya</h3>
               <div class="stars">
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star-half-alt" style="color: #fb873f;"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"The real-world case studies gave me the confidence to tackle industry challenges. Best decision I made for my career!"</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="Student Picture">
            <div>
               <h3>Vikram</h3>
               <div class="stars">
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star-half-alt" style="color: #fb873f;"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"The step-by-step approach helped me build my skills from scratch. Now, I can confidently create my own projects!"</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="Student Picture">
            <div>
               <h3>Neha</h3>
               <div class="stars">
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star" style="color: #fb873f;"></i>
                  <i class="fas fa-star-half-alt" style="color: #fb873f;"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>


<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>