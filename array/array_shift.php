<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $tims = ['Erwin','Levi','Mikasa','Eren'];
    array_shift($tims); 
    foreach ($tims as $value) {
        echo $value. '<br>';
    }
    ?>

    <hr>

    <?php
    $tims = ['Erwin','Levi','Mikasa','Eren'];
    array_unshift($tims,'Armin','Sasha'); 
    foreach ($tims as $value) {
        echo $value. '<br>';
    }
    ?>
</body>
</html>