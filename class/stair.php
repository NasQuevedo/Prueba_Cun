<?php
/**
* Stairs Class
*
* Class to create an ascendant, descedant and numeric stairs
*/
class Stairs{
	/**
	* var input
	*/
	private $input;

	/**
	* var output
	*/
	private $output = "*";

	/**
	* Satirs construct
	* @access public
	*/
	public function __construct($input){
		$this->input = $input;
	}

	/**
	* getStairAsc Method
	*
	* Method to create an ascendant "*" stair
	*
	* @access public
	* @version 1.0 Initial version <2021-02-22>
	* @author Santiago Quevedo <qesantiago@gmail.com>
	*/
	public function getStairAsc(){
		$cont = 1;
		$result = "";
		for($i=0;$i < $this->input; $i++){
			for($j=0;$j<$cont; $j++){
				$result.= $this->draw();
			}
			$result .= "<br>";
			$cont++;
		}
		return $result;
	}

	/**
	* getStairDesc Method
	* 
	* Method to create a descendant "*" stair
	*
	* @access public
	* @version 1.0 Initial version <2021-02-22>
	* @author Santiago Quevedo <qesantiago@gmail.com>
	*/
	public function getStairDesc(){
		$cont = $this->input;
		$result = "";
		for($i=0;$i<$this->input;$i++){
			for($j=0;$j<$cont; $j++){
				$result.= $this->draw();
			}
			$result.= "<br>";
			$cont=$cont -1;
		}

		return $result;
	}

	/**
	* getNumberStair Method
	*
	* Method to create a numeric stair
	* 
	* @access public
	* @version 1.0 Initial version <2021-02-22>
	* @author Santiago Quevedo <qesantiago@gmail.com>
	*/
	public function getNumericStair(){
		$lastNumber = "";
		$cont = 1;
		$result = "";
		for($i=0; $i<$this->input;$i++){
			$result .= $lastNumber.$cont;
			$result .= "<br>";
			$lastNumber=$lastNumber.$cont;
			$cont++;
		}

		return $result;
	}

	/**
	* draw Method
	*
	* Method to draw output "*"
	*
	* @access public
	* @version 1.0 Initial version <2021-02-22>
	* @author Santiago Quevedo <qesantiago@gmail.com> 
	*/
	private function draw(){
		$draw = $this->output;

		return $draw;
	}
}
?>