<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Voice of Tenkasi</title>

  <!-- Bootstrap 5 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Icons & Fonts -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Scheherazade+New&display=swap" rel="stylesheet">

  <!-- Custom CSS -->
  <link rel="stylesheet" href="assets/css/style.css?v=<?= time(); ?>">
  <link rel="stylesheet" href="contact.css">

  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

  <!-- Animation Libraries -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
  <link href="https://unpkg.com/aos@2.3.4/dist/aos.css" rel="stylesheet" />
</head>

<body style="background-color:white;">
  <!-- Header/Navbar Start -->
  <nav class="navbar navbar-expand-lg navbar-custom shadow-sm">
    <div class="container">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <div style="height: 50px; overflow: hidden;">
          <img src="./assets/images/logo.webp" alt="Voice of Tenkasi Logo" style="height: 64px; margin-top: -7px;">
        </div>
      </a>

      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#votNavbar" aria-controls="votNavbar" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Menu -->
      <div class="collapse navbar-collapse" id="votNavbar">
        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
          <li class="nav-item"><a class="nav-link" href="./">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="./about.php">About Us</a></li>
          <li class="nav-item"><a class="nav-link" href="./whatwedo.php">What We Do</a></li>
          <li class="nav-item"><a class="nav-link" href="./events.php">Events</a></li>
          <li class="nav-item"><a class="nav-link" href="./opportunities.php">Opportunities</a></li>
          <li class="nav-item"><a class="nav-link" href="./knowledge.php">Knowledge</a></li>
          <li class="nav-item"><a class="nav-link" href="./join.php">Join Us</a></li>
          <li class="nav-item"><a class="nav-link" href="./news.php">News</a></li>
          <li class="nav-item"><a class="nav-link" href="./contact.php">Contact</a></li>
         <li class="nav-item">
            <a class="btn donate-btn ms-lg-3" href="donate.php">Donate</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Header/Navbar End -->

  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://unpkg.com/scrollreveal"></script>
  <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
  <script src="index.js" defer></script>
  <!--<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script> -->

</body>


</html>
