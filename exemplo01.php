<?php

$qualSuaIdade = -80;

$idadeCrianca = 12;

$idadeAdulto = 18;

$idadeMelhorIdade = 65;

if($qualSuaIdade >= 0){
	
	if($qualSuaIdade < $idadeCrianca){

		echo "Criança";

	}elseif ($qualSuaIdade < $idadeAdulto) {
		echo "Acolescente";
	}elseif ($qualSuaIdade < $idadeMelhorIdade) {
		echo "Adulto";
	}else{
		echo "Idoso";
	}
}else{
		echo "Idade Inválida";
	}

?>