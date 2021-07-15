<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">

    <title>Document</title>
</head>

<body>
    <?php
    require_once(VIEWS . "main/header.php");
    ?>
    <section class='Dashboard'>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">First</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>
                <?php

                foreach ($allQuestions as $question) {
                    echo (" 
                        <tr>
                            <th scope='row'>$question[qst_no]</th>
                                <td>$question[question]</td>
                                <td>            
                                <button class='btn btn-danger'>Delete</button>
                                <a href='?goToDash=true&id=$question[qst_no]' class='btn btn-primary' data-bs-toggle='modal'>Edit</a>
                        </tr>
                    ");
                }
                ?>
            </tbody>
        </table>
    </section>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Update Question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form action="?goToDash=true&id=$question[qst_no]&action=update" method="GET">
                    <div class="modal-body">
                        <label for="question" class="form-label">Question</label>
                        <input type="text" class="form-control" id="question" value="<?php echo $question['question']; ?>">
                        <?php
                        foreach ($allAnswers as $answer) {
                            echo ("<label for='answer-$question[qst_no]' class='form-label'>Answer option $answer[anw_no]</label>
                            <input type='text' class='form-control' id='answer-$question[qst_no]' value='$answer[answer]'>
                                ");
                        }
                        ?>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <a class="start-sql-button" href="?start=again"><span class="start-text">to start</span></a>
</body>

</html>