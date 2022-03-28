<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="">
	<meta charset="UTF-8"/>
	<title> Será que precisa votar </title>
</head>

<body>
<div>
	<?php
	
	$a = isset($_GET["ano"])?$_GET["ano"]:1900;
	$i = date("Y") - $a;
	echo "Você nasceu em $a e tem $i anos.<br/><br/>";
	if($i < 16){
		echo "Candidato você ainda não tem permissão para votar";
	}
	elseif(($i >= 16 && $i < 18) || ($i > 70)){
	
		echo "Você possui opção de votar ou não.";
	}
	else {
	echo "Voto Obrigatório";
	}
	
	
	?>
</div>
</body>
</html>