<?php
session_start();
if (isset($_GET['question'])) {
    $_SESSION['current-question'] = $_GET['question'];
}

function getQuestions($data, $table, $id)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT $data FROM $table WHERE questions.qst_no = $id";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo $row["question"];
        }
    } else {
        echo "Hey";
    }
    $conn->close();
};

function getAnswers($data, $table, $id)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT $data FROM $table WHERE answers.qst_no = $id";
    $result = $conn->query($sql);
    //echo "<form>";
    if ($result->num_rows > 0) {
        // output data of each row
        return $result;
        while ($row = $result->fetch_assoc()) {
            //$bool = $row['is_correct'] ? 'true' : 'false';
            //echo "<button type='submit' class='answer-button button-$row[is_correct]' value='$row[is_correct]' id='$bool-$row[anw_no]' name='answer-button'>" . $row["answer"] . "</button>";
        }
    } else {
        //echo "Hey";
    }
    //echo "</form>";
    $conn->close();
};

function getQuestionsLeft($data, $table)
{
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "exam";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT COUNT($data) FROM $table";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        $row = $result->fetch_assoc();
        if (isset($_SESSION['current-question'])) {
            $rest = $row["COUNT(*)"] - $_SESSION['current-question'];
            $_SESSION['questions-total'] = $row["COUNT(*)"];
            $current = $row["COUNT(*)"] - $rest;
            echo $current . " Of ";
        }
        echo $row["COUNT(*)"];
    } else {
        echo "Hey";
    }
    $conn->close();
};

function checkCorrectAnswer($questionId)
{
    $answerId = $_GET['answer-button'];
    if ($answerId == 1) {
        $questionId = $questionId + 1;
        if ($questionId > $_SESSION['questions-total']) {
            sleep(1);
            header("Location: ./MVCquizend.php");
        } else {
            sleep(1);
            header("Location: ./MVCquestion.php?question=" . $questionId);
        }
    } else if ($answerId == 0) {
        header("Location: ./MVCquestion.php?question=" . $questionId);
        //header("Location: ./MVCquestion.php?question=" . $questionId . "&" . "$" . "answer-button=" . $answerId);
    } else {
        exit;
    }
};
