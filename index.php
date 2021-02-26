<?php

$paragraph = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti, officia blanditiis? Alias doloremque est nesciunt quis, voluptatum quia. Et consectetur ipsam velit aspernatur quas magnam? Repudiandae quae vero earum praesentium?";

$length = strlen($paragraph);

$badword = $_GET["badword"];

$paragraphStrToLower = strtolower($paragraph);
$badwordStrToLower = strtolower($badword);

$newParagraph = str_replace($badwordStrToLower, "***", $paragraphStrToLower);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<body>

<h3>Questo è il paragrafo preso dalla variabile in PHP:</h3>
<p> <?php echo $paragraph ?> </p>

<h3>Il paragrafo preso da PHP ha lunghezza:</h3>
<h4> <?php echo $length ?> </h4>

<h3>La parola presa da $_GET["badword"] è :</h3>
<h4> <?php echo $badword ?> </h4>

<h3>E sostituisce la parola proita con dei ***</h3>

<p> <?php echo $newParagraph ?> </p>

</body>
</html>