<?php
header("Access-Control-Allow-Origin: *");

function abrir_conexao($url_bd, $user_bd, $pass_bd, $bd)
{	
	if (($url_bd == "") or ($user_bd == "") or ($pass_bd == "") or ($bd == ""))
	{
		return false;
	}
	else
	{
		$conexao = mysqli_connect($url_bd, $user_bd, $pass_bd, $bd);
		mysqli_select_db($conexao, $bd);
		return $conexao;
	}
}

function fechar_conexao($conexao)
{
	mysqli_close($conexao);
}


if(($_REQUEST["metodo"] == "inserir_processo"))
{
	// $minha_conexao = abrir_conexao("url_exemplo", "user_exemplo", "pass_exemplo", "bd_exemplo");

	if( ($_REQUEST["pasta"] != "" and $_REQUEST["pasta"] != null and $_REQUEST["pasta"] != "undefined") and ($_REQUEST["comarca"] != "" and $_REQUEST["comarca"] != null and $_REQUEST["comarca"] != "undefined") and ($_REQUEST["uf"] != "" and $_REQUEST["uf"] != null and $_REQUEST["uf"] != "undefined") )
	{
		$SQL = "INSERT INTO processos
				(
					pasta,
					comarca,
					uf
				)
				VALUES
				(
					'".$_REQUEST["pasta"]."',
					'".$_REQUEST["comarca"]."',
					'".$_REQUEST["uf"]."'
				)";

		// $query = mysqli_query($ConexaoMy, $SQL);

		if($query)
		{
			echo "Inserido !";
		}
		else
		{
			echo "Não inserido!";
		}
	}
	else
	{
		echo "Ausencia de informações !";
	}

	// fechar_conexao($minha_conexao);
}
else
{
	echo "Metodo não reconhecido";
}

die();
?>