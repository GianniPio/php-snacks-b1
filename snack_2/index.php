<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Verifica accesso</title>


    <?php
    // variabili per i parametri da passare
    $name= $_GET['name'];
    $mail= $_GET['mail'];
    $age= $_GET['age'];

    $lenghtName = strlen($name); // lunghezza della stringa
    $chiocciola = strpos($mail, "@"); // stringa contiene carattere @
    $punto = strpos($mail, "."); //stringa contiene carattere .
    $mailOk = $chiocciola !== false && $punto !== false; // verificare che la mail contiene in caratteri
    $numero = is_numeric($age); // verificare che sia un numero

    ?>

</head>
<body>
    <div>
      <?php

        if (($lenghtName >= 3) && ($mailOk) && ($numero)) {
            echo '<p class="green">Accesso riusciuto </p>';
        }else {
            echo '<p class="red">Accesso negato </p>';
        }

        echo $name . " (" . $lenghtName . ")" . "<br>";
        echo $mail . "<br>";
        echo $age . "<br>";

    ?>  
    </div>
    

 
    
</body>
</html>