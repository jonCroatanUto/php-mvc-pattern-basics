<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <section class="nota-wrapper">
        <h1>
            <?php
            echo $_SESSION['nota'];
            ?>
        </h1>
        <a class="start-sql-button" href="?"><span class="start-text">Back Home</span></a>
    </section>
</body>

</html>