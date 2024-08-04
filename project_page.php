<?php
include './admin_php/config.php';
include './admin_php/functions.php';

session_start();

if (isset($_GET['project']) && isset($_GET['image'])) {
  // Get the project name from the URL parameter and sanitize it
  $projectName = mysqli_real_escape_string($conn, $_GET['project']);
  $firstImageUrl = mysqli_real_escape_string($conn, $_GET['image']);
  // Fetch all images for the current project
  $imageQuery = mysqli_query($conn, "SELECT * FROM images WHERE project_name = '$projectName'");
  $imageResult = mysqli_fetch_assoc($imageQuery);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./css/styles.css" />
  <link rel="stylesheet" href="./css/contact.css" />
  <link rel="stylesheet" href="./css/navBar.css" />
  <link rel="stylesheet" href="./css/about.css" />
  <!-- Swiper CSS -->
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
  <link rel="stylesheet" href="./css/animation.css" />

  <script src="./assets/js/particles.min.js"></script>
  <link rel="stylesheet" href="./css/footer.css" />

  <!-- Swiper JS -->
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="https://kit.fontawesome.com/22cd64f621.js" crossorigin="anonymous"></script>

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
    integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
    integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</head>

<body>
  <div class="nav-container">
    <div class="container-fluid top-nav-bar">
      <div class="row navigation">
        <div class="col-12 d-flex flex-row align-items-center justify-content-between">
          <div class="logo-container div-center">
            <a href="index.html">
              <img class="nav-logo" src="images/logo.png" alt="" />
            </a>
          </div>

          <div class="nav-control d-none d-md-block">
            <ul class="main-nav text-decoration-none p-0 m-0 div-center">
              <li class="hidenav">
                <a href="index.html">Home <span class="nav-hover-line"></span></a>
              </li>
              <li class="hidenav ">
                <a href="about.html">About <span class="nav-hover-line"></span></a>
              </li>
              <li class="hidenav">
                <a href="service.html">Service <span class="nav-hover-line"></span></a>
              </li>
              <li class="hidenav active">
                <a href="project.html">Project <span class="nav-hover-line"></span></a>
              </li>
              <li class="hidenav">
                <a href="contact.html">Contact <span class="nav-hover-line"></span></a>
              </li>
            </ul>
          </div>

          <div class="mobile-nav d-md-none">
            <input type="checkbox" id="main-navigation-toggle" class="btn btn--close" title="Toggle main navigation" />
            <label for="main-navigation-toggle">
              <span></span>
            </label>

            <nav id="main-navigation" class="nav-main">
              <ul class="menu">
                <li class="menu__item">
                  <a class="menu__link" href="/index.html">Home</a>
                </li>
                <li class="menu__item">
                  <a class="menu__link" href="/about.html">About</a>
                </li>
                <li class="menu__item">
                  <a class="menu__link" href="/service.html">Services</a>
                </li>
                <li class="menu__item">
                  <a class="menu__link" href="/project.html">Projects</a>
                </li>
                <li class="menu__item">
                  <a class="menu__link" href="/contact.html">Contact</a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="inside">
    <div class="float">
      <a href="./contact.html">
        <div class="trigger">
          <i class="fa fa-send" aria-hidden="true"></i>
        </div>
      </a>
    </div>
  </div>

  <div class="container-fluid-max secondary-pages-hero-section-container">
    <div class="row">
      <div class="col">
        <div class="right-landing-image">
          <div class="right-loca">
            <div class="about-item">
              <h6>Home</h6>
            </div>
            <div class="about-line"></div>
            <div class="about-item">
              <p>Projects</p>
            </div>
          </div>

          <div class="right-box">
            <h1><?php echo $projectName; ?></h1>
          </div>

          <img src="./images/contact-landing2.png" alt="" />
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid-max rolling-text">
    <div class="wrapper">
      <div class="icon"><i id="left" class="fa-solid fa-angle-left"></i></div>
      <ul class="tabs-box">
        <li class="tab">FARM LAND</li>
        <li class="tab">INTERIOR</li>
        <li class="tab">HOTELS</li>
        <li class="tab">CONSTRUCTIONS</li>
        <li class="tab">RENOVATIONS</li>
        <li class="tab">Unboxing</li>
        <li class="tab">History</li>
        <li class="tab">Programming</li>
        <li class="tab">Gadgets</li>
        <li class="tab">Algorithms</li>
        <li class="tab">Comedy</li>
        <li class="tab">Gaming</li>
        <li class="tab">Share Market</li>
        <li class="tab">Smartphones</li>
        <li class="tab">Data Structure</li>
      </ul>
      <div class="icon">
        <i id="right" class="fa-solid fa-angle-right"></i>
      </div>
    </div>
  </div>

  <div class="container-fluid container-fluid-max mt-5">
    <div class="row">
      <div class="col-md-4 about-main-pic mb-4">
        <div class="about-pic-image">
          <img onclick="openModal(this.src)" loading="lazy" src="<?php echo $firstImageUrl; ?>" alt="Image">
        </div>
      </div>

      <?php while ($imageResult = mysqli_fetch_assoc($imageQuery)): ?>
        <div class="col-md-4 about-main-pic mb-4">
          <div class="about-pic-image">
            <img onclick="openModal(this.src)" loading="lazy" src="<?php echo $imageResult['url']; ?>" alt="Image">
          </div>
        </div>
      <?php endwhile; ?>
    </div>
  </div>

  <div class="container-fluid-max mt-5">
    <div class="google-map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15544.127155918764!2d80.1244362405913!3d13.097171895328328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a526237656b9a93%3A0x37587770c442f4d5!2sAyappakkam%2C%20Chennai%2C%20Tamil%20Nadu!5e0!3m2!1sen!2sin!4v1721850667848!5m2!1sen!2sin"
        width="600" height="450" style="border: 0" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

  </div>
  <!-- Footer -->
  <?php include 'footer.php'; ?>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const tabsBox = document.querySelector(".tabs-box");

      // Clone the list items and append to create a continuous effect
      const items = tabsBox.innerHTML;
      tabsBox.innerHTML += items;

      // Adjust the width of the container dynamically
      const updateWidth = () => {
        const tabWidth = document.querySelector(".tab").offsetWidth;
        const totalTabs = document.querySelectorAll(".tab").length;
        tabsBox.style.width = `${tabWidth * totalTabs * 2}px`; // Double the total width
      };

      // Initial width adjustment
      updateWidth();

      // Adjust on window resize
      window.addEventListener("resize", updateWidth);
    });

    var copy = document.querySelector(".skilled").cloneNode(true);
    document.querySelector(".skill-slide").appendChild(copy);
  </script>
</body>

</html>