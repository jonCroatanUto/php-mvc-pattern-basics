<?php

// This is the entry point of your application, all your application must be executed in
// the "index.php", in such a way that you must include the controller passed by the URL
// dynamically so that it ends up including the view.

// TODO Implement the logic to include the controller passed by the URL dynamically
// In the event that the controller passed by URL does not exist, you must show the error view.
include_once "./config/constants.php";
require_once(CONTROLLERS . "./MVCController.php");
if (isset($_GET['answer-button'])) runCheckCorrectAnswer();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/mvc-style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
    <div class="question-wrapper">
        <section class="question">
            <h1>
                <?php
                runGetQuestions($_SESSION['current-question']);
                ?>
            </h1>
        </section>
        <section class="answers-form">
            <?php
            runGenerateAnswers($_SESSION['current-question']);
            ?>
            <section class="answers-left">
                <h2>
                    <?php
                    //runCurrentQuestion();
                    runGetQuestionLeft();
                    ?>
                </h2>
            </section>
        </section>
    </div>
</body>
<script>
    $(".button-1").one("click", () => {
        $(".button-1").addClass('correct-answer');
    });
    $(".button-0").one("click", () => {
        $(".button-0").addClass('wrong-answer');
    });
</script>

</html>