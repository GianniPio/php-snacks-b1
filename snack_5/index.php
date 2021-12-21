<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <h1>Snack 5</h1>

    <?php
    $str = "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, minus deserunt quod illum neque odit quasi eaque a obcaecati rerum vel commodi recusandae. Sed laborum provident earum dolorem molestiae nesciunt. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, minus deserunt quod illum neque odit quasi eaque a obcaecati rerum vel commodi recusandae. Sed laborum provident earum dolorem molestiae nesciunt. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dignissimos, minus deserunt quod illum neque odit quasi eaque a obcaecati rerum vel commodi recusandae. Sed laborum provident earum dolorem molestiae nesciunt.";

    $paragrafs= (explode(".",$str));

    // for ($i=0; $i < count($paragraf) ; $i++) {
    //     echo $paragraf[$i] . ".<br><br>";

    // }

    foreach ($paragrafs as $paragraf) {
        echo $paragraf . "<br><br>";
    }
    
    ?>
</body>
</html>