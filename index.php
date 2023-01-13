<?php

echo "Aujourd'hui il fait \n -1000 degrés";

$var = "ceci est mon text";

echo strtolower($var);

// En majuscule
echo strtoupper($var);

// La première lettre en majuscule
echo ucfirst($var);

// Mets la première lettre de chaque mot en majuscule
echo ucwords($var);


$var2 = "CEST MON TEXT";

echo ucfirst($var2);
echo strtolower($var2);


$var3 = "ceci est ma chaine de caractère";
echo str_word_count($var3);

$myArray = ["oui", "non", 'surement']; // toutes les entrées du tableau pour former une seule chaîne de caractères.
echo implode($myArray);


$var4 = "bonjour je suis rémy";
echo strrev($var4);
echo str_shuffle($var4);



$var5 = "Hello, nous apprenons PHP";
echo $var5;
echo strip_tags($var5);

$var6 = "ceci est mon message";
$count = strlen($var6);

while ($count <= 500){
    $var6 = "| " . $var6;
    $count = strlen($var6);
}
echo $var6;


