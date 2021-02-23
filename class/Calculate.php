<?php
class Calculate{
	
	private $pi = "3.1416";

	private $input;

	public function __construct($input){
		$this->input = $input;
	}

	public function getCircleArea(){
		if(isset($this->input['circulo'])){
			$radio = $this->input['circulo']['radio'];
			$area = ($radio * $radio) * $this->pi;
			return $area;
		}
	}

	public function getTriangleArea(){
		if(isset($this->input['triangulo'])){
			$base = $this->input['triangulo']['base'];
			$altura = $this->input['triangulo']['altura'];
			$area = ($base * $altura) / 2;
			return $area;
		}
	}

	public function getSquareArea(){
		if(isset($this->input['cuadrado'])){
			$lado = $this->input['cuadrado']['lado'];
			$area = $lado * $lado;
			return $area;
		}
	}
}
?>