<?php
require __DIR__ . '/header.php';
require __DIR__ . '/arrays.php';
require __DIR__ . '/functions.php';

?>
<header>
    <?php require __DIR__ . '/clock.php'; ?>
</header>

<main>
    <div class="board">
        <?php
        require __DIR__ . '/board.php';
        ?>
    </div>
    <div class="learn">
        <h2>Välj en schackpjäs nedan för mer information</h2>
    </div>
</main>

<div class="container">
    <div class="box">

        <?php foreach ($pieces as $piece) :
            $name = $piece['title'];
            $french = $piece['french'];
            $img = $piece['image'];
            $press = $piece['button'];


        ?>
            <div class="chess-info">
                <ul>
                    <li>
                        <p class="image"><img src=" <?php echo "$img"; ?>"></p>
                    </li>
                    <li>
                        <p class="chess-title"><?php echo $name ?></p>
                    </li>
                    <li>
                        <p class="chess-date"><?php echo $french ?></p>
                    </li>
                    <li>
                        <a href="about.php?number=<?php echo $piece['number'] ?>" class="button"><?php echo $press ?></a>
                    </li>
                </ul>
            </div>


        <?php endforeach; ?>
    </div>

</div>
<?php
require __DIR__ . '/footer.php';
?>
