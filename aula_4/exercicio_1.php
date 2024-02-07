<?php
$numeros = [];

for ($i = 0; $i < 10; $i++) {
    $numeroDigitado = readline('Digite um número: ');
    array_push($numeros, $numeroDigitado);
}

//TODO Chamar as funções para continuar o exercício
echo 'Quantidade de números positivos: ' . contabilizarPositivos($numeros) . "\n";
echo 'Quantidade de números negativos: ' . contabilizarNegativos($numeros) . "\n";
echo 'Quantidade de números pares: ' . contabilizarPares($numeros) . "\n";
echo 'Quantidade de números Ímpares: ' . contabilizarImpares($numeros) . "\n";

function contabilizarPositivos(array $numeros): int
{
    $arrayFiltrado = array_filter($numeros, fn ($numero) => $numero > 0);
    return count($arrayFiltrado);
}

function contabilizarNegativos(array $numeros): int
{
    $arrayFiltrado = array_filter($numeros, fn ($numero) => $numero < 0);
    return count($arrayFiltrado);
}

function contabilizarPares(array $numeros): int
{
    $arrayFiltrado = array_filter($numeros, fn ($numero) => $numero % 2 == 0);
    return count($arrayFiltrado);
}

function contabilizarImpares(array $numeros): int
{
    $arrayFiltrado = array_filter($numeros, fn ($numero) => $numero % 2 != 0);
    return count($arrayFiltrado);
}
