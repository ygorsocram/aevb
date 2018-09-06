<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

function mask($mask,$str){
	$str = str_replace(" ","",$str);
	for($i=0;$i<strlen($str);$i++){
		$mask[strpos($mask,"#")] = $str[$i];
	}
	return $mask;
}

function dinheiro($valor){ //Saida: 150,00
	$real = number_format($valor, 2,',','.');
	return $real;
}

function dinheiro_2($valor){ //Saida: 150.00
	$real = number_format($valor, 2,'.','');
	return $real;
}

function quantidade_4($valor){ //Saida: 150.0000
	$real = number_format($valor, 4,'.','');
	return $real;
}

function dinheiro_float($real){ //Saida: 150.00
	$retirar = array(".", ",");
	$colocar = array("", ".");
	$float = str_replace($retirar, $colocar , $real);
	return $float;
}

function dinheiro_float_2($real){ //Saida: 150.00
	$real = str_replace(" ","", $real);
	$real = str_replace("R$","", $real);	
	$real = str_replace(".","", $real);
	$float = str_replace(",",".", $real);
	return $float;
}

function formatar_data($entrada){ //Saida: Dia/Mes/Ano
    $data = date('d/m/Y', strtotime(str_replace('/', '-', $entrada)));
    return $data;
}

function banco_data($entrada){ //Saida: Ano/Mes/Dia
    $data = date('Y/m/d', strtotime(str_replace('/', '-', $entrada)));
    return $data;
}

function remove_acentos($string){
    return preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/"),explode(" ","a A e E i I o O u U n N c C"),$string);
}

function remove_caracters_especiais($string){
	$retirar = array(")", "(", "-", ".", "/", "_");
	$novo = str_replace($retirar, null, $string);
	return $novo;
}

function campo_formatado_banco($string){
	$novo = mb_strtoupper(addslashes($string), 'UTF-8');
	return $novo;
}
