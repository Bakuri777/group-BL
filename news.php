<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>News</title>

    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="newspagestyle.css" />

    <link
        rel="shortcut icon"
        href="./assets/header logo.png"
        type="image/x-icon"
    />
    <link rel="stylesheet" href="newsstyle.css" />
</head>

<body>

<?php
$rooms = [
    [
        "title" => "Standard Twin Room",
        "image" => "./assets/rooms and rates 1.png",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis urna id arcu mattis porttitor laoreet at eros."
    ],
    [
        "title" => "Standard Room",
        "image" => "./assets/rooms and rates 2.png",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis urna id arcu mattis porttitor laoreet at eros."
    ],
    [
        "title" => "Standard View Room",
        "image" => "./assets/rooms and rates 3.png",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis urna id arcu mattis porttitor laoreet at eros."
    ],
    [
        "title" => "Deluxe Room",
        "image" => "./assets/rooms and rates 4.png",
        "description" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis quis urna id arcu mattis porttitor laoreet at eros."
    ]
];
?>

<?php include './components/header.php'; ?>

<main>

    <section class="news-first-section">
        <div class="box">

            <h1 class="rooms-rates-title">Rooms & Rates</h1>

            <?php foreach ($rooms as $room) { ?>
                <div class="news-list">
                    <div class="news-card">

                        <img src="<?php echo $room['image']; ?>" alt="<?php echo $room['title']; ?>">

                        <div class="news-card-content">
                            <h3><?php echo $room['title']; ?></h3>

                            <p>
                                <?php echo $room['description']; ?>
                            </p>

                            <a href="#">Check Rates</a>
                        </div>

                    </div>
                </div>
            <?php } ?>

        </div>
    </section>

    <section class="news-second-section">
        <div class="box">

            <h1 class="rooms-rates-title">Gallery</h1>

            <div class="gallery-grid">

                <?php foreach ($rooms as $room) { ?>
                    <img
                        src="<?php echo $room['image']; ?>"
                        alt="<?php echo $room['title']; ?>"
                    >
                <?php } ?>

            </div>

        </div>
    </section>

</main>

<?php include './components/footer.php'; ?>

</body>
</html>