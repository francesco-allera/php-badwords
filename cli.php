<?php

$text = 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veniam voluptatibus nisi itaque quaerat dicta repellendus ullam, exercitationem porro beatae. Veniam, eius dignissimos consequuntur optio recusandae ducimus nisi saepe! Earum, ipsa? Lorem ipsum dolor, sit amet consectetur adipisicing elit. Provident, ipsa dignissimos iusto, eum architecto amet dolorem repudiandae quos doloribus minima accusantium quis. Neque, nam repellat nostrum accusamus unde at iure!';

$length = strlen($text);

$word = $argv[1];

$newText = str_replace($word, '***', $text);

$newLength = strlen($newText);

echo  "\r\n\r\n";
echo 'Parola inserita: '. $word;

echo  "\r\n\r\n";
echo 'Testo originale:';

echo  "\r\n\r\n";
echo $text;

echo  "\r\n\r\n";
echo 'Lunghezza testo originale: ' . $length . ' caretteri';

echo  "\r\n\r\n";
echo 'Nuovo testo:'. $newText;

echo  "\r\n\r\n";
echo 'Lunghezza nuovo testo: ' . $newLength .' caratteri';
