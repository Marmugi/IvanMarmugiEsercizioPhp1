<?php
// Definizione delle variabili
$integerVar = 10;
$floatVar = 3.14;
$stringVar = "Hello, world!";
$boolVar = true;

// Mostra il tipo di dato delle variabili
echo "Tipo di dato di \$integerVar: " . gettype($integerVar) . "\n";
echo "Tipo di dato di \$floatVar: " . gettype($floatVar) . "\n";
echo "Tipo di dato di \$stringVar: " . gettype($stringVar) . "\n";
echo "Tipo di dato di \$boolVar: " . gettype($boolVar) . "\n";

// Definizione delle costanti
define('INTEGER_CONSTANT', 10);
define('FLOAT_CONSTANT', 3.14);
define('STRING_CONSTANT', "Hello, world!");
define('BOOLEAN_CONSTANT', true);

// Mostra il tipo di dato delle costanti
echo "Tipo di dato della costante INTEGER_CONSTANT: " . gettype(INTEGER_CONSTANT) . "\n";
echo "Tipo di dato della costante FLOAT_CONSTANT: " . gettype(FLOAT_CONSTANT) . "\n";
echo "Tipo di dato della costante STRING_CONSTANT: " . gettype(STRING_CONSTANT) . "\n";
echo "Tipo di dato della costante BOOLEAN_CONSTANT: " . gettype(BOOLEAN_CONSTANT) . "\n";
?>
