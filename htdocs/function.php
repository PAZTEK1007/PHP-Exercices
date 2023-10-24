<?php

$string = 'nicolas';

function capitalize($string){
    return ucwords($string);
}

$day = date('d');
$month = date('m');
$year = date('Y');
$hours = date('h');
$minutes = date('i');
$seconds = date('s');

function actualDate($day, $month, $year, $hours, $minutes, $seconds){

    return $day . '/' . $month . '/' . $year . ' ' . $hours . ':' . $minutes . ':' . $seconds;
}

echo capitalize($string);
echo "<br>";
echo actualDate($day, $month, $year, $hours, $minutes, $seconds);

function addition($a, $b) {
    if (!is_numeric($a) || !is_numeric($b)) {
        return "Error: argument is not a number";
    } else {
        return $a + $b;
    }
}

// $a = 'Hello';
// $b = 'World';

$a = 5;
$b = 89
;
echo "<br>";
echo addition($a, $b);

function initial($string) {
    if (is_string($string)) {
        return $string[0];
    } else {
        return "Error: argument is not a string";
    }
}
echo "<br>";
echo initial('Hello');
echo initial('World');

function letterReplace($string) {
    if (is_string($string)) {
        return str_replace('ae', 'æ', $string);
    } else {
        return "Error: argument is not a string";
    }
}

echo "<br>";
echo letterReplace("caecotrophie, chaenichthys, microsphaera, sphaerotheca");

function InvertLetterReplace($string) {
    if (is_string($string)) {
        return str_replace('æ', 'ae', $string);
    } else {
        return "Error: argument is not a string";
    }
}

echo "<br>";
echo InvertLetterReplace("cæcotrophie, chænichthys, microsphæra, sphærotheca");

function feedback($message, $class = 'info') {
    return "<div class=\"$class\">$message</div>";
}

echo "<br>";
echo feedback('Incorrect email address', "error");

function generatedWord($minlength, $maxlength) {
    $alphabet = 'abcdefghijklmnopqrstuvwxyz';
    $wordLength = rand($minlength, $maxlength);
    $randWord = '';

    for ($i = 0; $i < $wordLength; $i++) {
        $randWord .= $alphabet[rand(0, strlen($alphabet) - 1)];
    }
    return $randWord;
}

if (isset($_POST['submit'])) {

    $word  = generatedWord(1, 5);
    $word2 = generatedWord(7, 15);

    echo "<br>";
    echo "<p> $word </p>";
    echo "<p> $word2 </p>";
}

function toLowerCase($string) {
    if (is_string($string)){
        return strtolower($string);
    } else {
        return 'Error: argument is not a string';
    }
}

echo "<br>";
echo toLowerCase('STOP YELLING I CAN\'T HEAR MYSELF THINKING!!');


function calculateConeVolume($radius, $height){
    $volume = $radius * $radius * pi() * $height * (1/3);
    return 'The volume of a cone which ray is ' . $radius . ' and heigth is ' . $height . ' = ' . $volume . ' cm<sup>3</sup><br />';

}

$radius = 5;
$height = 2;

echo "<br>";
echo calculateConeVolume($radius, $height);
?>
<form action="" method="post">
    <label for="submit">Generate a word</label>
    <input type="submit" name="submit" value="Generate">
</form>
