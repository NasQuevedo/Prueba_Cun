<?php
class ChangeString{
	private $input;
	private $output;
	private $abc = ["a","b","c","d","e","f","g","h","i","j","k","l","m","n","ñ","o","p","q","r","s","t","u","v","w","x","y","z"];

	public function __construct($input){
		$this->input = $input;
	}

	public function build(){
		$letters = str_split($this->input);

		$this->output = "";
		foreach($letters as $keys => $letter){
			$write = true;
			foreach($this->abc as $key=>$value){
				if($value == $letter){
					if($letter != "z"){
						$this->output .= $this->abc[$key+1];
						$write = false;
					}else{
						$this->output .= $this->abc[0];
						$write = false;
					}
				}
			}
			if($write){
				$this->output .= $letter;
			}
		}
		return $this->output; 
	}
}
?>