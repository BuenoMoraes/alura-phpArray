<?php

namespace Alura;

require 'autoload.php';

$correntistas = [
  "Giovanni",
  "João",
  "Maria",
  "Luis",
  "Luisa",
  "Rafael"
];

$saldos = [
   2500,
   3000,
   4400,
   1000,
   8700,
   9000
];

// adiciona os arrays em sequencia $relacionados = array_merge ($correntistas, $saldos);

$combinados = array_combine ($correntistas, $saldos);

echo "<pre>";
var_dump ($combinados);
echo "</pre>";

//Buscar alguma posição especifica no array 
echo "<pre>";
echo $combinados["Giovanni"];
echo "</pre>";

//Adicionar alguma posição no array 
echo "<pre>";
$combinados["Matheus"] = 4500;
echo "</pre>";

//Apresentando array
echo "<pre>";
var_dump ($combinados);
echo "</pre>";

//Apresentando posição específica com texto antes
echo "<pre>";
echo "O saldo do Giovanni é: {$combinados["Giovanni"]}";
echo "</pre>";

//Verificando se a chave existe(caso que a chave não exista) 
echo "<pre>";
  if (array_key_exists("Joao", $combinados)) {
    echo "O saldo do Joao é: {$combinados["Joao"]}";
  } else {
    echo "Não foi encontrado";
  }
echo "</pre>";

//Verificando se a chave existe(caso que a chave exista) 
echo "<pre>";
  if (array_key_exists("João", $combinados)) {
    echo "O saldo do João é: {$combinados["João"]}";
  } else {
    echo "Não foi encontrado";
  }
echo "</pre>";



// Chamar método com maiores que 3000 de saldo

$maiores = ArrayUtils::encontrarPessoasComSaldoMaior(3000, $combinados);

echo "<pre>";
var_dump($maiores);
echo  "</pre>";


