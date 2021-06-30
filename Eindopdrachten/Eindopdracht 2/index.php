<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="master.css">

</head>

<body>
    <?php
    session_start();
    include 'Autoload.php';

    $spel = new Spel();
    echo $spel;
    ?>

    <div id="table"></div>
</body>
<script src="Display.js"></script>

</html>