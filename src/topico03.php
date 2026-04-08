<?php
echo "<h1>Tópico 03 </h1>";
$a=10;
echo "a = $a<br>";
$cep="01012123";
echo "cep = $cep<br>";
$nota=7.8;
$preco=5250.566;
echo "nota = $nota<br>";
echo "preco = R$ " . number_format($preco,2,",",".");
echo "<hr>";
$nome="Bete ";
echo "nome = $nome<br>";//nome = Bete
echo 'nome = $nome<br>';//nome = $nome
$cor="orange";
$cor="blue";
echo "<h2 style='color:$cor;'>Nenhuma sugestão</h2>";
$conectado=true;
echo "usuario está conectado? $conectado";
echo "<hr>";
$texto = "Uma linha";
$outrotexto = $texto .", outra linha";
echo $outrotexto .", chega de linha";
echo "<hr>";
$nota=7.8;
echo "nota = ".(int)$nota;
echo "<hr>";
//var_dump($nome);
define("USER","root");
echo "usuario : ".USER;
?>
<h2 style="color:red;">Titulo 2 </h2>