<?php
$word = 'ciao come va?';
$wordTwo = $_GET['parola'];
$newWord = str_replace($wordTwo, '***', $word);

$name = $_GET['nome'];
$surname = $_GET['cognome'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BadWords</title>
</head>
<body>

  <p>Questa è la frase: <?php echo $word; ?></p>
  <p>Questa è la sua lunghezza: <?php echo strlen($word); ?></p>
  <p>Modificando la parola tramite get sostituisco quello che voglio : <?php echo $newWord; ?></p>

  <p> Ciao <?php echo $name . " " . $surname; ?> </p>

</body>
</html>