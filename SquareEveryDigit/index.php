<!-- Welcome. In this kata, you are asked to square every digit of a number and concatenate them.
For example, if we run 9119 through the function, 811181 will come out, because 92 is 81 and 12 is 1. (81-1-1-81)
Example #2: An input of 765 will/should return 493625 because 72 is 49, 62 is 36, and 52 is 25. (49-36-25) -->

<?php 

$result = square_digits(112);
function square_digits($num): int {
    $square = ''; 
    $array = str_split($num);
    for ($i=0; $i < count($array); $i++) { 
        $singleSquare = $array[$i] * $array[$i];
        $square = $square.$singleSquare;
    };
    return $square;
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
        <h1>
            hello 
            <?php echo $result ?>
        </h1>
    </main>
</body>
</html></h1>