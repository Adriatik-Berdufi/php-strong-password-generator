<?php
    //user input
    $user_input = $_GET["inputNumber"];
   
    //str alfabeto
    $alfabeto = range('a', 'z');
    $stringa_alfabeto = implode('', $alfabeto);
    //str nr
    $numeri = range(0,9);
    $stringa_numeri = implode('',$numeri);
    //str caratteri speciali 
    $caratteri_speciali = '±§!@#$%^&*()-_=+[]{}|;:,.<>?/|';

    //str finale 
    $stringa_finale .= $stringa_alfabeto . $stringa_numeri . $caratteri_speciali;

    var_dump($stringa_alfabeto); 
    var_dump($stringa_numeri);
    var_dump($caratteri_speciali);
    echo $user_input;

    //funzioni:
    $pass_word='';
    while (strlen($pass_word) < $user_input +1) {
        $pass_word .= $stringa_finale[rand(0, strlen($stringa_finale))];;
    };


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PassGenerator</title>
    <h1><?php echo $pass_word ?></h1>
</head>
<body>

</body>
</html>