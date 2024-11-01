<?php 

function bouncingBall($h, $bounce, $window) {
    $result = 0;
    $bounceH = $h;
    if ($h <= $window || $h <= 0 || $bounce < 0 || $bounce >= 1 ) {
        $result = -1;
        return $result;
    } else {
        $result = 1;
    }

    while (($bounceH * $bounce) >= $window) {
        $bounceH = ($bounceH * $bounce);
        if ($bounceH === $window) {
            $result = $result + 1;
        } else {
            $result = $result + 2;
        }
    }
    return $result;
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
            <?php echo bouncingBall(30.0, 0.66, 1.5) ?>
        </h1>
    </main>
</body>
</html>