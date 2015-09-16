<?php

/**
 *Projeto com demostração de criação da classe Circulo, aplicação de Interface, criação de
 * métodos de cálculos, alteração dos atributos da mesma e impressão dos resultados.
 * @author José Francisco Chacon Torres dos Santos
 * @author José Francisco <jose.fcts@gmail.com>
 */

require_once "ICirculo.php";
require_once "Circulo.php";

print_r("<meta charset=\"UTF-8\">");

$circulo = new Circulo();

$circulos = array(
	"Circulo4" => 8.983,
	"Circulo5" => 12,
	"Circulo6" => 0.89,
);

print_r("<br><br><b>Círculos modificados: </b><br><br>");

foreach ($circulos as $identificador => $raio) {
	$circulo->alteraDados($identificador, $raio);
	$circulo->imprimeDados();
	$circulo->imprimirDebug($circulo);
}

?>