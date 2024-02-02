<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php

    include("./db.php");

    foreach ($array_movie as $film) {
        $film->printMovie();
    }
    ?>

</body>

</html>