<?php

//variabile per il paragrafo
$paragrafo =  $_GET['paragrafo'];

//variabile per la parola di censura
$censura =  $_GET['censura'];

//variabile cancellare gli spazi del paragrafo
$espazi = str_ireplace(' ','', $paragrafo);

//variabile per la lunghezza del paragrafo
$length = strlen("$espazi");

// variabile per sostituire la parola $censura
$risposta = str_ireplace($censura ,"***", $paragrafo);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h2>Stampare a schermo il paragrafo e la sua lunghezza</h2>
        <ul>
            <li><?php echo $paragrafo; ?></li>
            <li><?php echo $length; ?></li>
        </ul>
        <h2>Parola censurata</h2>
        <p><?php echo $censura; ?></p>
        <h2>Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.</h2>
        <ul>
            <li><?php echo $paragrafo; ?></li>
            <li><?php echo $risposta; ?></li>
        </ul>
    </div>
</body>
</html>