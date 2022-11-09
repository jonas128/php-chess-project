<?php

require __DIR__ . '/arrays.php';
require __DIR__ . '/header.php';
require __DIR__ . '/functions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Din valda schackpjäs</title>
    <link rel="stylesheet" href="style/about.css" />

</head>

<body>
    <div class="parent">
        <div class="button-info">
            <?php
            $pressedNumber = $_GET['number'] - 1;
            $trivia = $pieces[$pressedNumber]['trivia'];
            $title = $pieces[$pressedNumber]['title'];
            $getPoint = $pieces[$pressedNumber]['points'];

            ?>
            <ul>
                <li>
                    <p class="chess-order">Pjäs: <?php echo $title ?></p>
                </li>

                <li>
                    <p class="chess-element">trivia = <?php echo $trivia ?></p>
                </li>
                <div class="points">
                    <?php

                    echo getPoint($pieces, $getPoint);
                    ?>
                </div>

            </ul>

        </div>
    </div>
