<?php
require_once(MODELS . "DashboardModal.php");
$allQuestion = getAllQuestions();

if (isset($_GET["action"])) {
    $action = $_GET["action"];
    if (function_exists($action)) {
        call_user_func($action, $_REQUEST);
    } else {
        echo "Invalid user action";
    }
}

function edit()
{
    //echo "Edit";
}

function delete()
{
    deleteQuery($_GET["id"]);
    // echo print_r($item);
    header("Location:?goToDash=true");
}
require_once(VIEWS . "MVC/questionsDashboard.php");
