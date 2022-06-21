<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
A domani :php: -->
<?php
    $text = "Ciao pezzo di merda, come stai?";

    $bad_word = $_GET['bad_word'];

    $censored_text = str_replace ($bad_word, '***', $text);
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
    <div class="hello">
        <h2>
            <?php echo $text; ?>
        </h2>
        <h3>
            Lunghezza testo: <?php echo mb_strlen($text); ?>
        </h3>
    </div>
    <div class="censored-hello">
        <h2>
            <?php echo $censored_text; ?>
        </h2>
        <h3>
            Lunghezza testo: <?php echo mb_strlen($censored_text) ?>
        </h3>
    </div>
</body>
</html>
