<?php
$nome = "Fernando Morais";
$email = 'fernandomorais.ads@gmail.com';
$senha = '123456';

echo mb_strlen($senha) . PHP_EOL;

if(mb_strlen($senha) < 8){
    echo "Senha insegura" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$substr = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobrenome) = explode(' ', $nome);

echo "Nome: " . $nome . PHP_EOL;
echo "sobrenome: " . $sobrenome . PHP_EOL;

$csv = "Fernando Morais, 36 anos, fernandomorais.ads@gmail.com";
var_dump(explode(',' , $csv));