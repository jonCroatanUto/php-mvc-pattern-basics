<?php
require_once(MODELS . "DashboardModal.php");
$allQuestion = getAllQuestions();

$allQuestions = getAllQuestions();
if (isset($_GET['id'])) $allAnswers = getAllAnswers($_GET['id']);
//updateQuestion("New Question 1", 1);

if (isset($_GET["action"])) {
    $action = $_GET["action"];
    if (function_exists($action)) {
        call_user_func($action, $_REQUEST);
    } else {
        error("Invalid user action");
    }
}

function delete()
{

    deleteQuery($_GET["id"]);
    // echo print_r($item);
}
require_once(VIEWS . "MVC/questionsDashboard.php");
