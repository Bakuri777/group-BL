<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="style.css" />
  <title>BON Hotels</title>
  <link rel="shortcut icon" href="./assets/header logo.png" type="image/x-icon" />
</head>

<body>

<?php
$rooms = [
  ["title" => "Standard Twin Room", "class" => "card1"],
  ["title" => "Standard Twin Room", "class" => "card2"],
  ["title" => "Sea View Room", "class" => "card3"],
  ["title" => "Deluxe Room", "class" => "card4"],
];
?>

<!-- ---Header--- -->
<header>
  <div class="header box">
    <div class="logo">
      <a href="./index.php">
        <img src="./assets/header logo.png" alt="" />
      </a>
    </div>
   <div class="nav">
  <a href="#">Our Hotel</a>
  <a href="./news.php">Rooms & Rates</a>
  <a href="#">Facilities</a>
  <a href="#">Contact Us</a>
</div>
  </div>
</header>

<section class="welcome-section">
  <div class="welcome box">
    <h1>WELCOME TO BON HOTEL</h1>
    <p>Good people. Good thinking. Good feeling.</p>
    <a href="#">EXPLORE</a>
  </div>
</section>

<!-- ---rooms rates--- -->
<div class="rooms-rates box">
  <div class="rooms-rates-title">
    <h1>Rooms & Rates</h1>
  </div>

  <div class="rooms-rates-cards">
    <?php foreach($rooms as $room){ ?>
      <div class="rooms-rates-card <?php echo $room['class']; ?>">
        <h2><?php echo $room['title']; ?></h2>
        <a href="#">Check Rates</a>
      </div>
    <?php } ?>
  </div>

  <div class="rooms-rates-button">
    <h2>Get a room already!</h2>
    <a href="#">Book Now</a>
  </div>
</div>

<!-- ---footer--- -->
<footer>
  <div class="footer box">
    <div class="footer-logo">
      <a href="#">
        <img src="./assets/footer logo.png" alt="" />
      </a>
    </div>
    <div class="footer-nav">
      <a href="#">Our Hotels</a>
      <a href="#">Our Conferencing</a>
      <a href="#">Our Company</a>
      <a href="#">Hotel Design</a>
      <a href="#">Careers</a>
    </div>
    <div class="footer-info">
      <h3>Bon Hotels Head Office</h3>
      <a href="#">+27 434 344 432</a>
      <a href="#">info@bonhotels.com.</a>
    </div>
  </div>
</footer>

</body>
</html>