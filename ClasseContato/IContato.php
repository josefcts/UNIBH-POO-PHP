<?php

interface IContato {
	/**
	 *Método resposável por atualizar os dados do usuário
	 *@return void
	 */
	public function alteraDados($nome, $telefone);

	/**
	 *Método resposável por imprimir os dados do usuário
	 *@return void
	 */
	public function imprimeDados();

	/**
	 *Método resposável por imprimir a depuração da classe e sua estrutura
	 *@return void
	 */
	public function imprimirDebug($contato);
}

?>