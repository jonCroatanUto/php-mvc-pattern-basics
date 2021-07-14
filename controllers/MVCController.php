<?php

require_once(MODELS . "./MVCModel.php");

function runGetQuestions($id)
{
    getQuestions("*", "questions", $id);
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
