<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h1>Soal 2</h1>
<?php
function ubah_huruf($string)
{
    $abjad = "abcdefghijklmnopqrstuvwxyz";
    $output = "";
    for ($i=0; $i < strlen($string) ; $i++) {
        $position = strpos($abjad, $string[$i]);
        $output .= substr($abjad, $position +1,1);
    }
    return $output."<br>";
}
    echo ubah_huruf('wow'); // xpx
    echo ubah_huruf('developer'); // efwfmpqfs
    echo ubah_huruf('laravel'); // mbsbwfm
    echo ubah_huruf('keren'); // lfsfo
    echo ubah_huruf('semangat'); // tfnbohbu
    ?>
</body>
</html>
