<?php
require_once('../class/calculate.php');

if(isset($_GET['type'])){
	$input 		= array();
	$output 	= array();

	switch ($_GET['type']) {
		case 'circulo':
			$input[$_GET['type']]['radio'] = $_GET['radio'];
			$calculate 	= new Calculate($input);
			$output['result'] = $calculate->getCircleArea();
			break;
		case 'cuadrado':
			$input[$_GET['type']]['lado'] = $_GET['lado'];
			$calculate 	= new Calculate($input);
			$output['result'] = $calculate->getSquareArea();
			break;
		case 'triangulo':
			$input[$_GET['type']]['base'] = $_GET['radio'];
			$input[$_GET['type']]['altura'] = $_GET['altura'];
			$calculate 	= new Calculate($input);
			$output['result'] = $calculate->getTriangleArea();
			break;
		
		default:
			$input['circulo']['radio'] = 2;
			$calculate 	= new Calculate($input);
			$output['result'] = $calculate->getCircleArea();
			break;
	}

	echo json_encode($output);
}