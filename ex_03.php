<?php

function mascararCpf($cpf){

$cpfFragmentado = preg_split("//u", $cpf, -1,PREG_SPLIT_NO_EMPTY);

$cpfDivido = substr_replace($cpfFragmentado, '.', -4, 0);

$esconderCpf = explode(".", $cpfDivido);

$cpfEscondido = str_replace($esconderCpf, "*");

}

$cpf = 14083304901;





?>