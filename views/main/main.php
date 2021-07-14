<?php
$id = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <section class="start-wrapper">
        <h1>PHP MVC QUIZ PROJECT</h1>
        <a class="start-sql-button" href="?controller=questionController&action=getQuestions&question=<?php echo $id ?>"><span class="start-text">START</span></a>
    </section>
</body>

</html>