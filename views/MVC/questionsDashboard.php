<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" href="./assets/css/dashboard-style.css">
    <title>Document</title>
</head>

<body>
    <?php
    require_once(VIEWS . "main/header.php");
    ?>
    <section class='dashboard'>
        <table class="table table-ligth table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Question</th>
                    <th scope="col">Actions</th>
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
                                <a href='?goToDash=true&question_id=$question[qst_no]&action=edit' class='btn btn-primary' id='edit-button'>Edit</a>
                                <a href='?goToDash=true&id=$question[qst_no]&action=delete' class='btn btn-danger'>Delete</a>
                                </td>
                        </tr>
                    ");
                }
                ?>
            </tbody>
        </table>
        <<<<<<< HEAD <span class="back-button-wrapper">
            <a class="btn btn-primary" href="?start=again"><span class="start-text">Back</span></a>
            </span>
            =======
            >>>>>>> 929e3e69545e651604f2ee13d78b15afb6fb2f51
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
                        <<<<<<< HEAD=======<?php
                                            foreach ($allAnswers as $answer) {
                                                echo ("<label for='answer-$question[qst_no]' class='form-label'>Answer option $answer[anw_no]</label>
                            <input type='text' class='form-control' id='answer-$question[qst_no]' value='$answer[answer]'>
                                ");
                                            }
                                            ?>>>>>>>> 929e3e69545e651604f2ee13d78b15afb6fb2f51
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-success">Update</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <<<<<<< HEAD=======<a class="start-sql-button" href="?start=again"><span class="start-text">to start</span></a>
        >>>>>>> 929e3e69545e651604f2ee13d78b15afb6fb2f51
</body>
<script src="./assets/js/utils.js"></script>

</html>