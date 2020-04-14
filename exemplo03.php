<?php
//For

$tam = 10;

echo "Primeiro For";
for($i = 0; $i < $tam; $i++){

	echo "Valor = " . $i . "<br>";

}

$tam = 10000;
echo "Segundo For";
for($i = 0; $i < $tam; $i += 5){

	if($i >= 50 && $i < 200) continue;

	if($i == 900) break;

	echo "Valor = " . $i . "<br>";
	
}


?>