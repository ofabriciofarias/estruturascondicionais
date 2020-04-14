<?php
//switch case

$diaDaSemana = date("w");

echo $diaDaSemana . "<br>";

switch ($diaDaSemana) {
	case 0:
			echo "Domingo";
		break;
	case 1:
			echo "Segunda";
		break;
	case 2:
			echo "Terça";
		break;
	case 3:
			echo "Quarta";
		break;
	case 4:
			echo "Quinta";
		break;
	case 5:
			echo "Sexta";
		break;
	case 6:
			echo "Sábado";
		break;
	default:
			echo "Dia não válido";
		break;
}

$tempo = date('m/d/Y h:i:s a', time());;

echo "<br>" . $tempo . "<br>"; 

?>