<?php
   
    //str alfabeto
    $alfabeto = range('a', 'z');
    $stringa_alfabeto = implode('', $alfabeto);
    //str nr
    $numeri = range(0,9);
    $stringa_numeri = implode('',$numeri);
    //str caratteri speciali 
    $caratteri_speciali = '±§!@#$%^&*()-_=+[]{}|;:,.<>?/|';

    var_dump($stringa_alfabeto); 
    var_dump($stringa_numeri);
    var_dump($caratteri_speciali);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

</body>
</html>