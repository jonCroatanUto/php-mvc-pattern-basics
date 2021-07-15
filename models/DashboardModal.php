<?php

function getAllQuestions(){
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