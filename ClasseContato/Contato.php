<?php

class Contato implements IContato {

	private $nome;
	private $telefone;

	public function __construct() {
		print_r("<b>Aplicação iniciada</b><br><br>");

		$nomes = array(
			"Carol" => "3333-3333",
			"Ana Carla" => "3444-4444",
			"Patrícia" => "3555-5555",
		);

		foreach ($nomes as $nome => $telefone) {
			$this->nome = $nome;
			$this->telefone = $telefone;
			$this->imprimeDados();
			$this->imprimirDebug($this);
		}
	}

	/**
	 * @param $nome
	 * @param $telefone
	 */
	public function alteraDados($nome, $telefone) {
		$this->nome = $nome;
		$this->telefone = $telefone;
	}

	public function imprimeDados() {
		print_r("Dados do usuário<br>");
		print_r("Nome: " . $this->nome . "<br>");
		print_r("Telefone: " . $this->telefone . "<br>");
	}

	/**
	 * @param $contato
	 */
	public function imprimirDebug($contato) {
		print_r("<b>Debug Object: ( </b><br>");
		var_dump($contato);
		print_r("<br> ) <br><br><br>");
	}
}

?>