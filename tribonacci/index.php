<?php 

function tribonacci($signature, $n) {
    if ($n > 0 && count($signature) >= 3){
        $result = [];
        for ($i=0; $i < $n; $i++) { 
            if ($i < 3) {
                array_push($result, $signature[$i]);
            } else {
                $x = $result[$i - 1] + $result[$i - 2] + $result[$i - 3];
                array_push($result, $x);
            }
        }
        return $result;
    } else {
        return [];
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
        <h1>
            <?php var_dump(tribonacci([1,1,1], 10));  ?>
        </h1>
    </main>
</body>
</html>