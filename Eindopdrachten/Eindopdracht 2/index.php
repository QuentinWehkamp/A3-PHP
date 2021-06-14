<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="Display.js"></script>
</head>

<body>
    <?php
    include 'Autoload.php';

    $cards = array("0.png", "1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png", "0.png", "1.png", "2.png", "3.png", "4.png", "5.png", "6.png", "7.png");
    $Spel = new spel($cards);
    json_encode($cards);

    ?>

</body>

</html>