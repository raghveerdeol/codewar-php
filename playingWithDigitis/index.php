<?php 

function digPow($n, $p) {
    if ($n > 0 && $p > 0) {
        $arrayN = str_split($n);
        $x = 0;
        for ($i=0; $i < count($arrayN); $i++) { 
            $nPow = + pow($arrayN[$i], ($p + $i));
            $x = $x + $nPow;
        }
        if ($x < $n) {
            return -1;
        } else {
            $x = $x / $n;
            if(is_int($x)) {
                return $x;
            } else{
                return -1;
            }
        }
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
        <div>
            <h1><?php echo digPow(46288, 3) ?></h1>
        </div>
    </main>
</body>
</html>