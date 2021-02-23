<?php
require_once('../class/ClearPar.php');

if(isset($_GET['par'])){
	$result = array();
	$clearPar = new ClearPar($_GET['par']);
	$result['result'] = $clearPar->build();

	echo json_encode($result);
}