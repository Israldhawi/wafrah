<?php
session_start();
$isLoggedIn = isset($_SESSION['username']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Wafrah Platform</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- Stylesheets -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">
  <link rel="stylesheet" href="./style.css">
</head>
<body>

<!-- Navigation -->
<div id="nav">
  <ul id="list">
    <li class="link"><a href="index.php"><img src="./pic/logo.jpeg" alt="Logo" class="logo"> Home</a></li>
    <?php if ($isLoggedIn): ?>
      <li class="link"><a href="logout.php">Logout</a></li>
    <?php else: ?>
      <li class="link"><a href="login.php">Login</a></li>
      <li class="link"><a href="create.php">Create Account</a></li>
    <?php endif; ?>
  </ul>
  <hr>
</div>

<!-- Main Content -->
<main>
  <div class="content">
    <h2 style="color:#103775">Wafrah</h2>

    <?php if ($isLoggedIn): ?>
      <p style="color:#103775;">Welcome, <?= htmlspecialchars($_SESSION['username']) ?>!</p>
      <a href="logout.php"><button class="btn">Logout <i class="fa-solid fa-arrow-right"></i></button></a>
    <?php else: ?>
      <a href="login.php"><button class="btn">Login <i class="fa-solid fa-arrow-right"></i></button></a>
    <?php endif; ?>
  </div>

  <div class="swiper-container">
    <div class="swiper">
      <div class="swiper-wrapper">

        <div class="swiper-slide swiper-slide--one">
          <span style="background-color:#103775;">Wafrah</span>
          <div class="slide-content">
            <a href="MyAsso.php"><h3>Wafrah</h3></a>
          </div>
        </div>

        <div class="swiper-slide swiper-slide--one">
          <span style="background-color:#103775;">Wafrah</span>
          <div class="slide-content">
            <a href="compleat.php"><h3>complete you profile</h3></a>
          </div>
        </div>

        <div class="swiper-slide swiper-slide--one">
          <span style="background-color:#103775;">Wafrah</span>
          <div class="slide-content">
            <a href="settings.php"><h3>settings</h3></a>
          </div>
        </div>

        <div class="swiper-slide swiper-slide--one">
          <span style="background-color:#103775;">Wafrah</span>
          <div class="slide-content">
            <a href="about.html"><h3>About Us</h3></a>
          </div>
        </div>

        <div class="swiper-slide swiper-slide--two">
          <span style="background-color:#103775;">Wafrah</span>
          <div class="slide-content">
            <a href="how.html"><h3>How to use</h3></a>
          </div>
        </div>

        <div class="swiper-slide swiper-slide--three">
          <span style="background-color:#103775;">Wafrah</span>
          <div class="slide-content">
            <a href="trust.html"><h3>How can I trust Wafrah?</h3></a>
          </div>
        </div>

        <div class="swiper-slide swiper-slide--four">
          <span style="background-color:#103775;">Wafrah</span>
          <div class="slide-content">
            <a href="what.html"><h3>What money circles do you offer?</h3></a>
          </div>
        </div>

        <div class="swiper-slide swiper-slide--five">
          <span style="background-color:#103775;">Wafrah</span>
          <div class="slide-content">
            <a href="create.php"><h3>Create Account</h3></a>
          </div>
        </div>

        <div class="swiper-slide swiper-slide--six">
          <span style="background-color:#103775;">Wafrah</span>
          <div class="slide-content">
            <a href="login.php"><h3>Login</h3></a>
          </div>
        </div>

      </div>
    </div>
    <div class="swiper-pagination"></div>
  </div>

  <div class="circle"></div>
</main>

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
<script src="./script.js"></script>

<!-- Footer -->
<footer style="text-align:center; color:#FA28C1; background:black; opacity:0.7;">
  <ul class="wrapper">
    <li class="icon facebook"><span class="tooltip">Facebook</span><span><i class="fab fa-facebook-f"></i></span></li>
    <li class="icon twitter"><span class="tooltip">Twitter</span><span><i class="fab fa-twitter"></i></span></li>
    <li class="icon instagram"><span class="tooltip">Instagram</span><span><i class="fab fa-instagram"></i></span></li>
    <li class="icon github"><span class="tooltip">Github</span><span><i class="fab fa-github"></i></span></li>
    <li class="icon youtube"><span class="tooltip">Youtube</span><span><i class="fab fa-youtube"></i></span></li>
  </ul>
  <br><br>
  <ol style="font-size:13px; color:white;">
    This website developed by:
    <li>Esraa Abdullah Al-dhawi (36S2336740)</li>
    <li>Afnan Abdullah Anbar AL-qinqi (36J2248)</li>
    <li>Romisa Hamood Al-ashaykhi (36S2175)</li>
    <li>ALBayan hamdan AL-Mushaqri (36S2149)</li>
    <li>Maather saeed AL-sharji (36J2246)</li>
  </ol>
</footer>

</body>
</html>
  