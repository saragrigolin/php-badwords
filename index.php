<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->

<?php
//dichiaro il paragrafo
$paragraph = "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, quisquam nostrum. Consequuntur dicta, sint qui dolore quisquam, perspiciatis eaque illo incidunt aliquam harum facere ducimus dolorem aliquid ad officia quae.";

//dichiaro la variabile della query
$censured = $_GET["censured"];

//sostituisco la parola censurata
$paragraph2 = str_ireplace($censured, "***", $paragraph);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p>Frase iniziale: "<?php echo $paragraph; ?>"</p>
    <p>Lunghezza stringa: <?php echo strlen($paragraph); ?></p>
    <p>Aggiungi all'URL la seguente stringa ?censured="parola" dove la parola è quello che vuoi censurare.</p>
    <p>Frase censurata: "<?php echo $paragraph2; ?>"</p>
    <p>Lunghezza stringa: <?php echo strlen($paragraph2); ?></p>
</body>
</html>
