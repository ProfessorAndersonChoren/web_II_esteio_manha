<?php
if (empty($_POST))
    throw new InvalidArgumentException('Nenhum formulário encontrado!!!');

$value = $_POST['value'];
$originCoin = $_POST['origin_coin'];
$destinyCoin = $_POST['destiny_coin'];

$realValue = 1.00;
$dollarValue = 4.96;
$euroValue = 5.31;

if ($originCoin == 'real' && $destinyCoin == 'dollar')
    $result = convertCoin($value, $realValue, $dollarValue);
else if ($originCoin == 'real' && $destinyCoin == 'euro')
    $result = convertCoin($value, $realValue, $euroValue);
else if ($originCoin == 'dollar' && $destinyCoin == 'euro')
    $result = convertCoin($value, $dollarValue, $euroValue);
else
    $result = convertCoin($value, $euroValue, $dollarValue);

session_start();
$_SESSION['result'] = $result;
header("location:index.php");

function convertCoin(float $value, float $quoteValueOrigin, float $quoteValueDestiny)
{
    if ($quoteValueOrigin >= $quoteValueDestiny)
        $fee = $quoteValueDestiny / $quoteValueOrigin;
    $fee = $quoteValueOrigin / $quoteValueDestiny;

    return number_format($value * $fee, 2, ',', '.');
}
