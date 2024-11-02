<?php 

function longestConsec($strarr, $k) {
    $result = '';
    if ($k <= 0 || count($strarr) === 0 || $k > count($strarr)) {
        return '';
    }
    for ($i=0; $i < count($strarr); $i++) { 
        $subarray = array_slice($strarr, $i, $k);
        $mixedString = '';
        for ($x=0; $x < count($subarray); $x++) { 
            $mixedString = $mixedString.$subarray[$x];
        }
        if (strlen($result) < strlen($mixedString)) {
            $result = $mixedString;
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
        <h1><?php echo longestConsec(["ejjjjmmtthh", "zxxuueeg", "aanlljrrrxx", "dqqqaaabbb", "oocccffuucccjjjkkkjyyyeehh"], 1) ?></h1>
    </main>
</body>
</html>