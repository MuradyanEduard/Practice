<?php

if (isset($_POST['nKey'])) {
    echo "<p>Your Generated Key is: " . GenerateKey($_POST['nKey']) . "</p>";
}

function GenerateKey($count)
{
    $arrUpper = range('A', 'Z');
    $arrLower = range('a', 'z');
    $arrLetters = array_merge($arrUpper, $arrLower);
    $arrNumbers = range(0, 9);

    $generateType = intval($_POST['selects']);
    $generateSumbols = [];

    switch ($generateType) {
        case 0:
            $generateSumbols = $arrNumbers;
            break;
        case 1:
            $generateSumbols = $arrLetters;
            break;
        case 2:
            $generateSumbols = array_merge($arrNumbers, $arrLetters);
            break;
    }

    $key = "";
    for ($i = 0; $i < $count; $i++) {
        $key = $key . strval($generateSumbols[rand(0, count($generateSumbols) - 1)]);
    }

    return $key;
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <style>
        form * {
            margin: 15px;
        }

        form {
            margin-top: 35px;
        }
    </style>
</head>
<body>

<form action="task2.php" method="post">
    <input type="number" id="key" name="nKey" placeholder="տողի երկարությունը" required><br>
    <label for="selects">Տողի մեջ ներառել</label><br>
    <select name="selects">
        <option value="0">Թվեր</option>
        <option value="1">Տառեր</option>
        <option value="2">Թվեր և տառեր</option>
    </select><br>
    <button type="submit">գեներացնել</button>
</form>

</body>
</html>
