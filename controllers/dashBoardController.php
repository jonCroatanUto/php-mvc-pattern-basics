<?php
require_once(MODELS . "DashboardModal.php");

$allQuestions = getAllQuestions();
if (isset($_GET['id'])) $allAnswers = getAllAnswers($_GET['id']);
//updateQuestion("New Question 1", 1);

require_once(VIEWS . "MVC/questionsDashboard.php");
