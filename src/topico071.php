<?php
echo "<h1. While </h1>";

$i=0;

while ($i<5){
    echo " $i ";
    $i++;
}

/*
Saida: 0 1 2 3 4

1- valor inicial - 0 ($i)
2- condição - menor que 5 ($i<5)
3- contador - $i ++
4- quantas vezes o looping foi executado - 5 vez (representa a quantidade de vezes q o echo foi executado)
5- valor que torna a condiçao como falsa - 5

----------------------

Saida: 11 12 13 14 

1- valor inicial - 11 ($i)
2- condição - $i<15 ou $i<=14
3- contador - $i ++
4- quantas vezes o looping foi executado - 4
5- valor que torna a condiçao como falsa - 15

----------------------

Saida: 4 3 2 1 0

1- valor inicial - 4
2- condição - $i>=0
3- contador - $i --
4- quantas vezes o looping foi executado - 5
5- valor que torna a condiçao como falsa - -1

ver se o primeiro numero é maior ou menor que o ultimo

--------------------

Saida: 0 2 4 6 8 10

1- valor inicial - 0 ($i)
2- condição - $i<=10
3- contador - $i++; $i++; / jeito certo - $i+=2;
4- quantas vezes o looping foi executado - 6
5- valor que torna a condiçao como falsa - 12
*/
echo "<h1> Do While </h1>";
$i=7;

do{
echo "$i";
$i++;
}while ($i<5);

/*
Saida: 0 1 2 3 4

1- valor inicial - 0 ($i)
2- condição - $i<5
3- contador - $i++; 
4- quantas vezes o looping foi executado - 1
5- valor que torna a condiçao como falsa - 8
*/

echo "<h1>For</h1>";
for($i=0;$i<5;$i++) echo "$i";

echo "<h1>Looping aninhado</h1>";
for($i=3;$i<5;$i++){//externo
    for($j=0;$j<3;$j++){//interno
        echo "$i $j<br>";
    }
}

/*
i j
3 0
3 1
3 2
4 0
4 1
4 2
*/

?>

