<?php
class ClearPar{
	private $input;
	private $output;

	public function __construct($input){
		$this->input=$input;
	}

	public function build(){
		$pars = str_split($this->input);

		$first = "(";
		$second = ")";

		$this->output = "";

		$find = false;
		foreach($pars as $par){
			if($par == $first){
				$find = true;
			}

			if($find && $par == $second){
				$this->output .= $first;
				$this->output .= $par;
				$find = false;
			}
		}

		return $this->output;
	}
}
?>