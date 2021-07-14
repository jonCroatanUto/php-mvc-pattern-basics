<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.

include_once "config/constants.php";
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/index-style.css">
    <title>Document</title>
</head>

<body>
    <div class="content-wrapper">
        <section class="left-section">
            <h1>SQL Quiz</h1>
            <a class="start-sql-button" href="views/MVC/MVCquestion.php?question=1">START</a>
        </section>
        <section class="right-section">
            <h1>MVC Quiz</h1>
            <button class="start-mvc-button">Start</button>
        </section>
    </div>
</body>

</html>