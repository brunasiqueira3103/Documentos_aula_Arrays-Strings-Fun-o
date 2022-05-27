<?php

// primeira aula


/* $listaIdade = [21,23,19,25,30,41,18];

 $qualquerIdade = $listaIdade [2];

 echo $qualquerIdade; */


// segunda aula

$listaIdade = [21,23,19,25,30,41,18];

for ($i = 0; $i < 7; $i++) {

    echo $listaIdade [$i] . PHP_EOL;

}

echo PHP_EOL . "#####" . PHP_EOL . PHP_EOL;

// para verificar-exibir a lista podemos usar o count, tambem substituir o valor da condição em por count

$listaIdade2 = [1,3,5,7,9];

for ($i =0; $i < count($listaIdade2); $i++) {

    echo $listaIdade2 [$i] . PHP_EOL;

}

echo "tem na lista: " . count($listaIdade2);
