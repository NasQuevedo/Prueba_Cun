<?php
class CompleteRange{

	private $input;
	private $output;

	public function __construct($input){
		$this->input = $input;
	}

	public function build(){
		$numbers = explode(",", $this->input);

		$first = $numbers[0];
		$last = end($numbers);

		$this->output = "";
		for($i=$first; $i<=$last;$i++){
			$this->output .= $i.",";
		}

		$this->output = trim($this->output, ",");

		return $this->output;
	}
} 
?>