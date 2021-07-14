<?php
require_once(CONTROLLERS . "/MVCController.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/mvc-style.css">
    <title>Document</title>
</head>

<body>
    <div class="question-wrapper">
        <section class="question">
            <h1>
                <?php
                echo $dataQuestions;
                ?>
            </h1>
        </section>
        <section class="answers-form">
            <?php
            echo $id;
            foreach ($dataAnswers as $answer) {
                $nextAns=$answer['qst_no']+1;
                echo "<a href='?controller=questionController&action=getQuestions&question=$nextAns' class='answer-button' value='$answer[is_correct]' id='' name='answer-button'>" . $answer['answer'] . "</button>";
            }
            ?>
            <section class="answers-left">
                <h2>
                    <?php

                    ?>
                </h2>
            </section>
        </section>
    </div>
</body>

</html>