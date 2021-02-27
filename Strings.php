<?php

// Create simple string
$name = 'Zura';
$string = '   Hello World'  ;
$string2 = "Hello I am $name. I am 20";
echo $string. '<br>';
echo $string2. '<br>';

// String concatenation
echo 'Hello'.' World '.' PHP '.'<br>';

// String functions
echo "1 - ".strlen($string). '<br>'. PHP_EOL;
echo "2 - ".trim($string). '<br>'. PHP_EOL;
echo "3 - ". ltrim($string). '<br>'. PHP_EOL;
echo "4 - ". rtrim($string). '<br>'. PHP_EOL;
echo "5 - ". str_word_count($string). '<br>'. PHP_EOL;
echo "6 - ". strrev($string). '<br>'. PHP_EOL;
echo "7 - ". strtoupper($string). '<br>'. PHP_EOL;
echo "8 - ". strtolower($string). '<br>'. PHP_EOL;
echo "9 - ". ucfirst('hello'). '<br>'. PHP_EOL;
echo "10 - ". lcfirst('HELLO'). '<br>'. PHP_EOL;
echo "11 - ". ucwords('hello world'). '<br>'. PHP_EOL;
echo "12 - ". strpos($string, 'world'). '<br>'. PHP_EOL;
echo "13 - ". stripos($string, 'world'). '<br>'. PHP_EOL;
echo "14 - ". substr($string, 8). '<br>'. PHP_EOL;
echo "15 - ". str_replace('World', 'PHP', $string). '<br>'. PHP_EOL;
echo "16 - ". str_ireplace('world', 'PHP', $string).'<br>'. PHP_EOL;

// Multiline text and line breaks
$longText = "
Hello, my name is 
I am 20,
I do stuff
";
echo $longText.'<br>';
echo nl2br($longText).'<br>';

// Multiline text and reserve html tags
$longText = "
Hello, my name <b>is</b> 
I am <b>20</b>,
I do stuff
";
echo "1 - ".$longText.'<br>';
echo "2 - ". nl2br($longText). '<br>';
echo "3 - ". htmlentities($longText). '<br>';
echo "4 - ". nl2br((htmlentities($longText))).'<br>';


// https://www.php.net/manual/en/ref.strings.php