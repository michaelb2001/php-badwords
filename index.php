<?php
$parolaCensurata = $_GET["parola"];
$testo = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi quas maiores, magnam sit, a rem eos iste dolor eius vitae praesentium deserunt, voluptate quidem officia. Porro ea ducimus iste saepe.";

$testoCensurato = str_replace($parolaCensurata,"***",$testo);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-badwords</title>
</head>
<body>
    <h1><?php echo $testoCensurato ?> </h1>
    <h2>lunghezza testo non censurato  = <?php  echo strlen($testo)?> caratteri<br>
    lunghezza testo censurato = <?php  echo strlen($testoCensurato)?> caratteri</h2>
</body>
</html>