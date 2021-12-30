<?php

class Calculadora
{
    public function calculaMedia(array $notas): ?float
    {
        $quantidadeNotas = sizeof($notas);
        if ($quantidadeNotas !== 0) {
            $soma = 0;

            for ($i = 0; $i < $quantidadeNotas; $i++) {
                $soma = $soma + $notas[$i];
            }

            $media = $soma / $quantidadeNotas;

            return $media;
        } else {
            return null;
        }
    }
}

/*Index.php para utiização desta classe
<?php

require 'Calculadora.php';
;

$notas = [9, 5, 10, 8];

$calculadora = new Calculadora();
$media = $calculadora->calculaMedia($notas);

if ($media) {
    echo "A média é: $media";
} else {
    echo "Não foi possível calcular a média";
}

//$notas = [9, 3, 10, 5, 10];
/*
echo "<p>Nota de português: $notas[0]</p>";
echo "<p>Nota de matemática: $notas[1]</p>";
echo "<p>Nota de geografia: $notas[2]</p>";
echo "<p>Nota de história: $notas[3]</p>";
echo "<p>Nota de química: $notas[4]</p>";

$quantidadeNotas = sizeof($notas);

$soma = 0;
for ($i = 0; $i < $quantidadeNotas; $i++) {
    $soma = $soma + $notas[$i];
}

$media = $soma / $quantidadeNotas;

if ($quantidadeNotas !== 0) {

    $quantidadeNotas = sizeof($notas);

    $soma = 0;
    for ($i = 0; $i < $quantidadeNotas; $i++) {
        $soma = $soma + $notas[$i];
    }

    $media = $soma / $quantidadeNotas;

    echo $media;
}

echo "<p>A média é $media</p>";*/
