<?php

function generatePassword($length = 12, $useSmallLetters = true, $useCapitalLetters = true, $useNumbers = true, $useSymbols = true) {
    $smallLetters = 'abcdefghijklmnopqrstuvwxyz';
    $capitalLetters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numbers = '0123456789';
    $symbols = ['!', '#', '$', '%', '&', '(', ')', '*', '+', '@', '^'];

    $characterSet = '';

    if ($useSmallLetters) {
        $characterSet .= $smallLetters;
    }
    if ($useCapitalLetters) {
        $characterSet .= $capitalLetters;
    }
    if ($useNumbers) {
        $characterSet .= $numbers;
    }
    if ($useSymbols) {
        $characterSet .= implode('', $symbols);
    }

    if (empty($characterSet)) {
        return "Invalid character set configuration.";
    }

    $password = '';
    $charsetLength = strlen($characterSet);

    for ($i = 0; $i < $length; $i++) {
        $randomIndex = mt_rand(0, $charsetLength - 1);
        $password .= $characterSet[$randomIndex];
    }

    return $password;
}

// Customize the options as needed
$length = 16; // Change the desired length
$useSmallLetters = true; // Set to false to exclude small letters
$useCapitalLetters = true; // Set to false to exclude capital letters
$useNumbers = true; // Set to false to exclude numbers
$useSymbols = true; // Set to false to exclude symbols

$password = generatePassword($length, $useSmallLetters, $useCapitalLetters, $useNumbers, $useSymbols);
echo "Generated Password: $password";

?>

