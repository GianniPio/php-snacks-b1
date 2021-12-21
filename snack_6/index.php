<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>

    <?php

    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];

    ?>

</head>
<body>
    <h2>Snack 6</h2>


    <?php

        foreach ($db as $key => $element) {
            
            foreach ($element as $people) {
                if ($key == "teachers") {
                    
                    echo "<div class='grigio'>" . $people['name'] . ' ' . $people['lastname'] . '<br> </div>';
                } else {
                    echo "<div class='verde'>" . $people['name'] . ' ' . $people['lastname'] . '<br> </div>';
                }
            }
        }


    ?>

</body>
</html>