<?php

function inverterTexto($texto){


$caracteres = preg_split("//u", $texto, -1,PREG_SPLIT_NO_EMPTY);

$caracteresInvertidos = array_reverse($caracteres);

$textoInvertido = implode('', $caracteresInvertidos);

$quantidadeCaracteres = mb_strlen($texto);

return [
"invertido" => $textoInvertido,
"quantidade" => $quantidadeCaracteres
];

}

$texto_usuario = "Programação em PHPI @2024 #ç-å";

echo "Texto original: Stexto_usuario <br>";

$resultado = inverterTexto($texto_usuario);

echo "Texto invertido: " . $resultado["invertido"] . "<br>";
echo "Quantidade de caracteres: " . $resultado["quantidade"].
"ebr>";