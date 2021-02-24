<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diawanti_tugas8</title>
</head>
<body>
<h1>Soal 3</h1>
    <?php
    $strings = array('Hello World', 'I aM aLAY', 'My Name is Bond!!', 'IT sHOULD bE me', '001-A-3-5TrdYW');
    foreach ($strings as $testcase) {
        if (ctype_upper($testcase)) {
            echo "The string $testcase consists of all uppercase letters.\n";
            echo"<br>";
        } else {
            echo "The string $testcase does not consist of all uppercase letters.\n";
            echo"<br>";
        }
    }
    ?>
</body>
</html>