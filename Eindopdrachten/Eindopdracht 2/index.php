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
    <div id="board">
        <?php
        include 'Autoload.php';

        $spel = new Spel();
        echo $spel;
        if ($spel->isReady()) {
            echo "Je hebt gewonnen!";
        }

        ?>

    </div>
    <a class="button" href="?new">restart</a>
</body>

</html>