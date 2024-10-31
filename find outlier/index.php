<?php 

function find($integers) {
    $odds = [];
    $evens = [];
    foreach ($integers as $integer) {
        if ($integer % 2 === 0) {
            array_push($evens, $integer);
        } else {
            array_push($odds, $integer);
        }
    }
    if (count($odds) > count($evens)) {
        return $evens[0];
    } else {
        return $odds[0];
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <main>
        <h1><?php  ?></h1>
    </main>
</body>
</html>