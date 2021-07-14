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
            foreach ($dataAnswers as $answer) {
                $nextAns = $answer['qst_no'] + 1;
                echo "<a href='?action=getQuestions&question=$nextAns&is_correct=$answer[is_correct]' class='answer-button'  name='answer-button'>" . $answer['answer'] . "</a>";
            }
            ?>
        </section>
    </div>
</body>

</html>