<?php

$array = [
    1 => 'a',
    '1' => 'b',
    1.5 => 'c',
    true => 'd',
];

/*o PHP só só consegue trabalhar, em arrays associativos, 
com chaves dos tipos inteiro ou string 

-Floats também são convertidos para inteiros
-Booleanos são convertidos para inteiro
-Null será convertido para uma string vazia

--> Arrays e objetos não podem ser usados como chaves. 
Fazer isso resultará em um aviso: Illegal offset type.

fazendo com que em nosso teste a cada "nova" chave adicionada,
é convertida e sobreescre as outras.

*/

foreach ($array as $item){
    echo $item . PHP_EOL;
};

echo  PHP_EOL . "######". PHP_EOL . PHP_EOL;

// solução, anexo documentação do PHP para tipos: https://www.php.net/manual/pt_BR/language.types.array.php

echo "ultilize sempre como padrão para chaves de arrays associativas strings e numeros inteiros cabeção! Até hehehe" . PHP_EOL;
