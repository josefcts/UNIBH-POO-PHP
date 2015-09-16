<?php

/**
 *Projeto com demostração de criação da classe Contato, aplicação de Interface,
 * alteração dos atributos da mesma e impressão dos resultados.
 * @author José Francisco Chacon Torres dos Santos
 * @author José Francisco <jose.fcts@gmail.com>
 */

require_once "IContato.php";
require_once "Contato.php";

print_r("<meta charset=\"UTF-8\">");

$contato = new Contato();

$nomes = array(
	"Fernanda" => "3666-6666",
	"Raquel" => "3777-7777",
	"Marcela" => "3888-8888",
);

print_r("<br><br><b>Nomes modificados: </b><br><br>");

foreach ($nomes as $nome => $telefone) {
	$contato->alteraDados($nome, $telefone);
	$contato->imprimeDados();
	$contato->imprimirDebug($contato);
}

?>