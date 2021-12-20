<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack 1</title>

    <?php 
    // array delle partite
    $matches = [
        [
            'teamCasa' => "Olimpia Milano",
            'teamOspite' => "Cantù",
            'scoreCasa' => 55,
            'scoreOspite' => 60
        ],
        [
            'teamCasa' => "Virtus Bologna",
            'teamOspite' => "Reyer Venezia",
            'scoreCasa' => 59,
            'scoreOspite' => 22
        ],
        [
            'teamCasa' => "Stella Azzurra",
            'teamOspite' => "Libertas Livorno",
            'scoreCasa' => 10,
            'scoreOspite' => 80
        ],
        [
            'teamCasa' => "Petrarca",
            'teamOspite' => "Dinamo Sassari",
            'scoreCasa' => 50,
            'scoreOspite' => 60
        ],
        [
            'teamCasa' => "Lazio",
            'teamOspite' => "Aquila Trento",
            'scoreCasa' => 23,
            'scoreOspite' => 2
        ]

        ];
    
    
    
    
    ?>
</head>
<body>
    <div>
        <?php 

        // var_dump($matches);
        

        for ($i=0; $i < count($matches); $i++) { 
            
            echo $matches[$i]["teamCasa"] . " - " . 
            $matches[$i]["teamOspite"] . " | " . 
            $matches[$i]["scoreCasa"] . " - " . 
            $matches[$i]["scoreOspite"];
            echo "<br><br>";
        }

        ?>
    </div>
    
</body>
</html>