<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="./node_modules/bootstrap/dist/css/bootstrap.css">

    <title>Document</title>
</head>
<body>
    <?php
    require_once(VIEWS."main/header.php");
    ?>
    <section class='Dashboard'>
    <table class="table">
        <thead>
        <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
        </tr>
    </thead>
        <tbody>
            <?php
            
                foreach($allQuestion as $question){
                    echo (" 
                        <tr>
                            <th scope='row'>$question[qst_no]</th>
                                <td>$question[question]</td>
                                <td>Otto</td>
                                <td>            
                                <button class='btn btn-danger'>Delete</button>
                                </td>
                        </tr>
                    ");
                }
                ?>
        </tbody>
    </table>
    </section>
    <a class="start-sql-button" href="?start=again"><span class="start-text">to start</span></a>
</body>

</html>