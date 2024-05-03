<?php
// var_dump($_GET);
$paragraph = $_GET["paragrafo"];
$badwords = ("stronzo");
$replacement = ("***");
$cleanParagraph= str_replace($badwords,$replacement,$paragraph,$count);
// $numeroSostituzioni= str_replace($badwords,$replacement,$paragraph, $count);
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
    <h2><?php echo $paragraph?></h2>
    <br>
    <span>Lunghezza paragrafo in bit: <?php echo strlen($paragraph)?></span>
    <br>
    <h2><?php echo $cleanParagraph?></h2>
    <br>
    <span>Lunghezza paragrafo nuovo in bit: <?php echo strlen( $cleanParagraph)?></span>
    <br>
    <h2>Numero di volte che la parola è stata sostituita: <?php echo $count?></h2>
</body>
</html>

<style>
    *{
        text-align: center;
    }
    h1{
        font-size: 50px;
        margin-bottom: 100px;
    }
    h2{
        font-size: 45px;
    }
    span{
        font-size: 30px;    
    }
</style>