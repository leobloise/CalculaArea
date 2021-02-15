<?php

function calculateFatorial($num)
{
    if($num == 1) {
        return 1;
    } else {
        $new = $num - 1;
        return $num * calculateFatorial($new);
    }
}

function calculaArea($num)
{
    /**
     * Área = Quantidade de quadrados que ele se extende em formato de cruz sem contar com o do centro.
     * Qunatidade de quadrados = 1 + (n - 1) * 4 + !n - 1 * 2
     * Explicação: 1, pois ele aprenseta sempre um quadrado no meio
     */

    if($num == 1) {
        return $num;
    }

    $result = 1 + (($num - 1) * 4) + (calculateFatorial($num - 1) * 2);

    return $result;
}

$num = 4;
$resultado = calculaArea($num);

echo "A área de '{$num}' é {$resultado}".PHP_EOL;