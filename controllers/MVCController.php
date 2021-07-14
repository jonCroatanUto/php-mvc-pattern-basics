<?php

require_once(MODELS . "./MVCModel.php");

function runGetQuestions($id)
{
    $data = getQuestions("*", "questions", $id);
    require_once("./views/MVC/MVCquestion.php");
}

function runGenerateAnswers($id)
{
    getAnswers("*", "answers", $id);
}

function runGetQuestionLeft()
{
    getQuestionsLeft("*", "questions");
}

function runCheckCorrectAnswer()
{
    checkCorrectAnswer($_SESSION['current-question']);
}
