<?php
require_once(CONTROLLERS . "/MVCController.php");
$id = 1;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <a class="start-sql-button" href="?controller=questionController&action=getQuestions&question=<?php echo $id ?>">START</a>
</body>

</html>