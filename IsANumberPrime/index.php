<?php 

    function is_prime(int $n) {
        $result = 1;
        if ($n < 2) {
            return 0;
        }
        for ($i=2; $i < $n; $i++) {
            if ($n % $i == 0) {
                return 0;
            }
            $result = 1;
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
    <header>
    </header>
    <main>
        <div><?php echo is_prime(17) ?></div>
    </main>
</body>
</html>