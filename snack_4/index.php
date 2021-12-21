<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Array random</title>

    <!-- Creare un array con 15 numeri casuali, tenendo conto che l'array non dovrà contenere lo stesso numero più di una volta -->
</head>
<body>
    <div>
        <?php

        

        // for ($i=0; count($arrNum) < 15 ; $i++) { 
        //     $arrNum[] = rand(1 ,100);

        //     print_r($arrNum[$i]);
        //     echo "<br><br>";
        // }

        function randomNumber($min, $max, $lenght) {
            $arrNum = [];
            while (count($arrNum) < $lenght) {
                $number = rand($min, $max);

                if (!in_array($number, $arrNum)) {
                    $arrNum[] = $number;
                }
            }

            echo '<ul>';

            for ($i=0; $i < count($arrNum); $i++) { 
                echo '<li>' . $arrNum[$i] . '</li>';
            }

            echo '</ul>';

            return $arrNum;
        }
        
        randomNumber(1, 100, 15);

        ?>
    </div>
</body>
</html>