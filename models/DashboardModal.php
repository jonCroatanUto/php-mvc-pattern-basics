<?php

function getAllQuestions()
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM questions";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dataAllQuestions[] = $row;
        }
        return $dataAllQuestions;
    } else {
        exit;
    }
    $conn->close();
}

function getAllAnswers($id)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM answers WHERE answers.qst_no = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $dataAllAnswers[] = $row;
        }
        return $dataAllAnswers;
    } else {
        exit;
    }
    $conn->close();
}

function updateQuestion($question, $id)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "UPDATE questions SET question='$question' WHERE questions.qst_no=$id;";
    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }
    $conn->close();
};
