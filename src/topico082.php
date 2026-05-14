<?php
$nomes=["Fulano","Beltrano","Sicrano", "Astrogildo", "Bete","João"]; //indexado pois a posição é numerica
$total = count($nomes); // 6
echo "Foram encontradas $total nomes no array.<br>";
echo "Primeiro valor do array: ".$nomes[0]."<br>";
echo "Último valor do array: ".$nomes[count($nomes)-1]; //João
echo "<hr>";
for($i=0;$i<count($nomes);$i++){
	echo $nomes[$i]."<br>";
}
?>
<hr>

<?php
$uf=["SP","RJ","ES","MG"];
echo "<pre>";print_r($uf);echo "</pre>";
array_push($uf, "TO");
array_push($uf, "BA");
array_push($uf, "RN");
array_push($uf, "PR");
array_pop($uf);//remove o ultimo elemento do array (nesse caso o PR) 
echo "<pre>";print_r($uf);echo "</pre>";
sort($uf);
echo "<pre>";print_r($uf);echo "</pre>";
?>

<?php //assosicativo é "string"
$estudante=[
    "id"=> 1,
    "nome"=> "Bete",
    "nota"=> 9.5
];

foreach($estudante as $pos=>$valor){
//pos (ele coloca posição, que nesse caso é o id, nome e nota)

echo "<br>$pos: $valor";

};
?>
<hr

<?php 
$multi=[
    [10,20,30],
    [40,50,60],
    [70,80,90]


];
for($i=0;$i<3;$i++){//linhas
    for($j=0;$j<3;$j++)//colunas
        echo $multi[$i][$j]." ";

};

echo "<br>";

?>


