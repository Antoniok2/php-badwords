<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta. Stampare a schermo il paragrafo e la sua lunghezza. (vedi le funzioni stringhe nelle sliedes)
[OPZIONALE] Una parola da censurare viene passata dall'utente tramite parametro GET. Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
$titlePage = "Il mio primo esercizio con PHP";
$testo = "PHP (acronimo ricorsivo di PHP: Hypertext Preprocessor, preprocessore di ipertesti; originariamente acronimo di Personal Home Page) è un linguaggio di scripting interpretato, originariamente concepito per la programmazione di pagine web dinamiche.";

$parolaCensurata = str_replace("acronimo", "***", $testo)
?>

<style>

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        display: flex;
        flex-direction: column;
        align-items: center;
        text-align: center;
        background-color: red;
    }

    h1 {
        text-align: center;
        color: white;
        margin-bottom: 20px;
    }

    p {
        width: 80%;
        color: white;
        margin-bottom: 20px;
        font-size: 20px;
    }

    span {
        color: white;
        width: 80%;
        font-size: 20px;
        margin-bottom: 20px;
    }
</style>

<h1> <?php echo $titlePage; ?> </h1>
<p> <?php echo $testo; ?> </p>
<span> La lunghezza del testo è: <?php echo strlen($testo); ?> </span>

<p><?php echo $parolaCensurata; ?> </p>
<span>La lunghezza del testo dopo la parola censurata è: <?php echo strlen($parolaCensurata); ?> </span>
<span></span>




</body>
</html>