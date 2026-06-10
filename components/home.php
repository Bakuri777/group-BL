<?php
$rooms = [
  ["title" => "Standard Twin Room", "class" => "card1"],
  ["title" => "Standard Twin Room", "class" => "card2"],
  ["title" => "Sea View Room", "class" => "card3"],
  ["title" => "Deluxe Room", "class" => "card4"],
];
?>

<section class="welcome-section">
  <div class="welcome box">
    <h1>WELCOME TO BON HOTEL</h1>
    <p>Good people. Good thinking. Good feeling.</p>
    <a href="#">EXPLORE</a>
  </div>
</section>

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