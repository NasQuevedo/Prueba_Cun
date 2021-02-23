<?php
header("Content-Type:application/json");

class ws{
	private $data;
	private $array;
	private $name = "";
	private $salary = "";
	private $email = "";

	public function __construct($name = "", $salary="", $email=""){
		$this->data = file_get_contents("../ejemplo.json");
		$this->array = json_decode($this->data, true);
		if($name != ""){
			$this->name = $name;
		}

		if($salary != ""){
			$this->salary = $salary;
		}

		if($email != ""){
			$this->email = $email;
		}
	}

	public function find(){
		$find = array();
		foreach($this->array as $data){
			if($this->name != ""){
				if($data['name'] == $this->name){
					$find = $data;
				}
			}else if($this->salary != ""){
				if($data["salary"] == $this->salary){
					$find = $data;
				}
			}else if($this->email != ""){
				if($data['email'] == $this->email){
					$find = $data;
				}
			}
		}

		if(count($find) > 0){
			return $this->getResponse(200, "Success", $find);
		}else{
			return $this->getResponse(400, "Not Found", $find);
		}
	}

	private function getResponse($status, $message, $data){
		header("HTTP/1.1 $status $message");
		$response = array();
		$response["status"] = $status;
		$response["message"] = $message;
		$response["data"] = $data;

		return $response;
	}
}

$name 	= "";
$salary = "";
$email 	= "";
if(isset($_GET['name'])){
	$name = $_GET['name'];
}

if(isset($_GET['salary'])){
	$salary = $_GET['salary'];
}

if(isset($_GET['email'])){
	$email = $_GET['email'];
}
$ws = new ws($name, $salary, $email);
echo json_encode($ws->find());