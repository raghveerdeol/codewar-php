<?php 

function detect_pangram($string){
    $alphachar = array_merge(range('A','Z'));
    $string = strtoupper($string);
    $letters = preg_replace('/[^A-Z]/','',$string);
    var_dump($letters);
    foreach ($alphachar as $element) {
        if (str_contains($letters, $element) === false) {
            return 0;
        }
    }
    return 1;
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
            <?php echo detect_pangram('abcdefghijklmnopqrstuvwxyz123.,:;'); ?>
        </h1>
    </main>
</body>
</html>