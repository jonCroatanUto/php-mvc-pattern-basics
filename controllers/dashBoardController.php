<?php
require_once(MODELS . "DashboardModal.php");

$allQuestion=getAllQuestions();

require_once(VIEWS ."MVC/questionsDashboard.php");
