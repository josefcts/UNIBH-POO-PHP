<?php

interface ICirculo {

	/**
	 *Método resposável por calcular a circunferência
	 *@return float
	 */
	public function calculaCircunferencia();

	/**
	 *Método resposável por calcular a área do círculo
	 *@return float
	 */
	public function calculaArea();

	/**
	 *Método resposável por atualizar os dados do círculo
	 *@return void
	 */
	public function alteraDados($identificador, $raio);

	/**
	 *Método resposável por imprimir os dados do círculo
	 *@return void
	 */
	public function imprimeDados();

	/**
	 *Método resposável por imprimir a depuração do objeto e sua estrutura
	 *@return void
	 */
	public function imprimirDebug($circulo);
}

?>