<?php
require_once(MODELS . "./MVCModel.php");

$id = 1;

if (isset($_GET['action'])) {
    $dataQuestions = getQuestions($_GET['question']);
    $dataAnswers = getAnswers($_GET['question']);
    $checkAnswer = checkAnswer($_GET['question']);
    
    require_once("./views/MVC/MVCquestion.php");
}

if (isset($_GET['action'])) {
    $data = getQuestions($_GET['question']);
    require_once("./views/MVC/MVCquestion.php");
}

// if (function_exists($action)) {
//     call_user_func($action, $_REQUEST);
// } else {
//     error("Invalid user action");
// }
