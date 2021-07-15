<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/mvc-end-style.css">
    <title>Document</title>
</head>

<body>
    <section class="nota-wrapper">
        <span class='span-nota'>
            <?php
            if ($_SESSION['nota'] > 6 / 2) {
                echo "Great job! You have answered correctly";
                echo "<h1 class='number-correct'>$_SESSION[nota]</h1>";
                echo "questions";
            } else {
                echo "Oooh... Sorry, You have answered correctly";
                echo "<h1 class='number-correct'>$_SESSION[nota]</h1>";
                echo "questions";
            }
            ?>
        </span>
        <a class="back-button" href="?"><span class="start-text">Back Home</span></a>
    </section>
</body>

</html>