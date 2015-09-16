<?php
class Circulo implements ICirculo {

	private $raio;
	private $identificador;
	private $circuferencia;
	private $area;
	const PI = 3.14;

	public function __construct() {
		print_r("<b>Aplicação iniciada</b><br><br>");

		$circulos = array(
			"Circulo1" => 1.24,
			"Circulo2" => 0.77,
			"Circulo3" => 3,
		);

		foreach ($circulos as $identificador => $raio) {
			$this->raio = $raio;
			$this->identificador = $identificador;
			$this->area = $this->calculaArea();
			$this->circuferencia = $this->calculaCircunferencia();
			$this->imprimeDados();
			$this->imprimirDebug($this);
		}
	}

	/**
	 * @return mixed
	 */
	public function calculaArea() {
		$area = Circulo::PI * pow($this->raio, 2);
		return $area;
	}

	/**
	 * @return mixed
	 */
	public function calculaCircunferencia() {
		$circuferencia = 2 * Circulo::PI * $this->raio;
		return $circuferencia;
	}

	/**
	 * @param $identificador
	 * @param $raio
	 */
	public function alteraDados($identificador, $raio) {
		$this->identificador = $identificador;
		$this->raio = $raio;
		$this->area = $this->calculaArea();
		$this->circuferencia = $this->calculaCircunferencia();
	}

	public function imprimeDados() {
		print_r("Dados do Círculo<br>");
		print_r("Identificador: " . $this->identificador . "<br>");
		print_r("Raio: " . $this->raio . "<br>");
		print_r("Área: " . $this->area . "<br>");
		print_r("Circuferência: " . $this->circuferencia . "<br><br>");
	}

	/**
	 * @param $circulo
	 */
	public function imprimirDebug($circulo) {
		print_r("<b>Debug Object: ( </b><br>");
		var_dump($circulo);
		print_r("<br> ) <br><br><br>");
	}
}

?>