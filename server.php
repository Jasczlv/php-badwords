<?php
// var_dump($_GET);
$paragraph = $_GET["paragrafo"];
$badwords = ("stronzo");
$replacement = ("***");
$cleanParagraph= str_replace($badwords,$replacement,$paragraph);
$numeroSostituzioni= str_replace($badwords,$replacement,$paragraph, $count);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>IL TUO CENSURATORE DI PAROLACCE </h1>
    <span><?php echo $paragraph?></span>
    <br>
    <span>Lunghezza paragrafo in bit: <?php echo strlen($paragraph)?></span>
    <br>
    <span><?php echo $cleanParagraph?></span>
    <br>
    <span>Lunghezza paragrafo nuovo in bit: <?php echo strlen( $cleanParagraph)?></span>
    <br>
    <span>Numero di volte che la parola è stata sostituita: <?php echo $count?></span>
</body>
</html>