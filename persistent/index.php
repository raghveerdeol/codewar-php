<?php 

function persistence(int $num) {
    $numArray = str_split($num);
    $multiplications = 0;
    if ($num < 10) {
        return 0;
    }  else {
        while($num >= 10) {
            $num = array_product($numArray);
            $numArray = str_split($num);
            $multiplications = $multiplications + 1;
        }
    }
    return $multiplications;
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
        <h1><?php echo persistence(10) ?></h1>
    </main>
</body>
</html>