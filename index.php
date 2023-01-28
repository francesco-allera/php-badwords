<?php

$text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam voluptatibus nisi itaque quaerat dicta repellendus ullam, exercitationem porro beatae. Veniam, eius dignissimos consequuntur optio recusandae ducimus nisi saepe! Earum, ipsa? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, ipsa dignissimos iusto, eum architecto amet dolorem repudiandae quos doloribus minima accusantium quis. Neque, nam repellat nostrum accusamus unde at iure!';

$length = strlen($text);

$word = $_GET['badword'] ? $_GET['badword'] : '';

$newText = str_replace($word, '***', $text);

$newLength = strlen($newText);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Badwords</title>
</head>
<body>

    <small>
        Aggiungere all'url ?badword= con la parola da censurare, poi premere invio.
    </small>

    <h1>
        La parola da censurare è: <?php echo $word; ?>
    </h1>

    <br>

    <h2>
        Il testo originale è:
    </h2>

    <p>
        <?php echo $text; ?>
    </p>

    <h3>
        La lunghezza del testo è di <?php echo $length; ?> caratteri
    </h3>

    <br>

    <h2>
        Il nuovo testo è:
    </h2>

    <p>
        <?php echo $newText; ?>
    </p>

    <h3>
        La lunghezza del nuovo testo è di <?php echo $newLength; ?> caratteri
    </h3>

</body>
</html>