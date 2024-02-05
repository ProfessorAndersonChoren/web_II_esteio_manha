<?php
$numberOne = readline('Digite o primeiro número: ');
$numberTwo = readline('Digite o segundo número: ');
$operation = readline('Digite a operação desejada: somar, subtrair, multiplicar, dividir ');

echo realizarOperacao($numberOne,$numberTwo,$operation);

/**
 * Essa função irá efetuar uma operação matemática básica de acordo com o valor informado no parâmetro "Operation"
 * @param float $firstNumber Primeiro número
 * @param float $secondNumber Segundo número
 * @param string $operation Operação matemática desejada (Opcional)
 * @return float
 */
function realizarOperacao(float $firstNumber,float $secondNumber,string $operation='somar'):float
{
    switch($operation){
        case 'somar':
            return $firstNumber + $secondNumber;
        case 'subtrair':
            return $firstNumber - $secondNumber;
        case 'multiplicar':
            return $firstNumber * $secondNumber;
        case 'dividir':
            return $firstNumber / $secondNumber;
        default:
            return 0;
    }
}