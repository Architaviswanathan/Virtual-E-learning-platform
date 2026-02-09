<?php
if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}
?>

<header class="header">

   <section class="flex">

   <p class="m-0 fw-bold" style="font-size: 35px; color:rgb(32, 32, 31);"> <img src="images/logo.png" height="30px;" width="40px;" ><span style="font-size: 25px;">KEC<span style="color: #fb873f; font-size: 21px;">LearnSphere</span></p>

      <form action="search_course.php" method="post" class="search-form">
         <input type="text" name="search_course" placeholder="search courses..." required maxlength="100">
         <button type="submit" class="fas fa-search" name="search_course_btn"></button>
      </form>

      <div class="icons">
         <div id="menu-btn" class="fas fa-bars" style="color: #fb873f;" ></div>
         <div id="search-btn" class="fas fa-search" style="color: #fb873f;"></div>
         <div id="user-btn" class="fas fa-user" style="color: #fb873f;"></div>
         <div id="toggle-btn" class="fas fa-sun" style="color: #fb873f;"></div>
      </div>

      <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
         <h3><?= $fetch_profile['name']; ?></h3>
         <span>student</span>
         <a href="profile.php" class="btn">view profile</a>
         <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
         <a href="components/user_logout.php" onclick="return confirm('logout from this website?');" class="delete-btn">logout</a>
         <?php
            }else{
         ?>
         <h3>please login or register</h3>
          <div class="flex-btn">
            <a href="login.php" class="option-btn">login</a>
            <a href="register.php" class="option-btn">register</a>
         </div>
         <?php
            }
         ?>
      </div>

   </section>

</header>

<!-- header section ends -->


<!-- side bar section starts  -->

<div class="side-bar">

   <div class="close-side-bar">
      <i class="fas fa-times"></i>
   </div>

   <div class="profile">
         <?php
            $select_profile = $conn->prepare("SELECT * FROM `users` WHERE id = ?");
            $select_profile->execute([$user_id]);
            if($select_profile->rowCount() > 0){
            $fetch_profile = $select_profile->fetch(PDO::FETCH_ASSOC);
         ?>
         <img src="uploaded_files/<?= $fetch_profile['image']; ?>" alt="">
         <h3><?= $fetch_profile['name']; ?></h3>
         <span>student</span>
         <a href="profile.php" class="btn">view profile</a>
         <?php
            }else{
         ?>
         <h3></h3>
          <div class="flex-btn" style="padding-top: .5rem;">
            
            <a href="index.html" class="navbar-brand d-flex align-items-center ">
           <p class="m-0 fw-bold" style="font-size: 35px; color:rgb(32, 32, 31);"> <img src="images/logo.png" ><span style="color:rgb(33, 33, 32); font-size: 25px;">KEC<span style="color: #fb873f; font-size: 18px;">LearnSphere</span></p>
        </a>
         </div>
         <?php
            }
         ?>
      </div>

   <nav class="navbar">
      <a href="home.php"><i class="fas fa-home" style="color: #fb873f;"></i><span>home</span></a>
      <a href="about.php"><i class="fas fa-question" style="color: #fb873f;"></i><span>about us</span></a>
      <a href="courses.php"><i class="fas fa-graduation-cap" style="color: #fb873f;"></i><span>courses</span></a>
      <a href="teachers.php"><i class="fas fa-chalkboard-user" style="color: #fb873f;"></i><span>teachers</span></a>
      <a href="student1.html"><i class="fas fa-pencil-alt" style="color: #fb873f;"></i> <span>Attend Test</span></a>
      <a href="t1.html"><i class="fas fa-pencil-alt" style="color: #fb873f;"></i> <span>Assign Test</span></a>

      <a href="http://127.0.0.1:5000/"><i class="fas fa-chalkboard-user" style="color: #fb873f;"></i><span>live session</span></a>

      <a href="contact.php"><i class="fas fa-headset" style="color: #fb873f;"></i><span>contact us</span></a>
   </nav>

</div>

<!-- side bar section ends -->