<?php
$results = shell_exec("vnstat -m --oneline");
$resultsArray = explode("\n", trim($results));
$servidorArray = explode(";", $resultsArray[0]);


$disco = shell_exec("df -h");
$discoArray = explode(" ", trim($disco));

$discos = array();
$j = 0;
while ($j < 100){
	if($discoArray[$j] != null){
		array_push($discos,$discoArray[$j]);
	}
	$j += 1;
}

$totalDisco = $discos[7];
$totalLivre = $discos[9];
$totalUsado = $discos[8];
$totalPorcentagemUsado = $discos[10];




$memoria = shell_exec("free -m");
$memoriaArray = explode("\n", trim($memoria));
$servidorMemoriaArray1 = ereg_replace("[^0-9]", " ", $memoriaArray[1]);
$servidorMemoriaArray2 = ereg_replace("[^0-9]", " ", $memoriaArray[2]);




$memoriaTotal = explode(" ",trim($servidorMemoriaArray1));
$memoriaUsada = explode(" ",trim($servidorMemoriaArray2));



$memorias = array();
$i = 0;
while ($i < 106){
	if ($memoriaUsada[$i] != null){
		array_push($memorias,$memoriaUsada[$i]);
	}
	$i += 1;
}



// $memorias[0]; Quantidade de memoria sendo usada
// $memorias[1]; Quantidade de memoria livre


//echo $discoArray[19]; // Total do disco
//echo "<br>";
//echo $discoArray[22]; // Total Usado
//echo "<br>";
//echo $discoArray[24]; // Total Restante
//echo "<br>";
//echo $discoArray[27]; // Percentual restante 
//echo "<br>";



$download_mensal = $servidorArray[8];
$upload_mensal = $servidorArray[13];

$download_diario = $servidorArray[3];
$upload_diario = $servidorArray[4];

$servidorMemoriaArray1[10];

mysql_connect("DATABSE", "LOGIN", "SENHA") or die(mysql_error());
mysql_select_db("status_sys") or die(mysql_error());



$query = "INSERT INTO `consumo_internet` (
								`id` ,
								`download_mensal` ,
								`upload_mensal` ,
								`download_diario` ,
								`upload_diario`,
								`memoria_livre` ,
								`memoria_usada` ,
								`memoria_total`,
								`total_disco` ,
								`total_disco_usado` ,
								`total_disco_livre` ,
								`total_disco_porcentagem_usado`
							)
			VALUES (
					'', '$download_mensal', '$upload_mensal', '$download_diario', '$upload_diario', '$memorias[1]', '$memorias[0]',$memoriaTotal[0], '$totalDisco', '$totalUsado','$totalLivre','$totalPorcentagemUsado'
)";



mysql_query($query);
mysql_close();

?>
