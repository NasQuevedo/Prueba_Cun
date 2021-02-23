<?php
require_once('../class/CompleteRange.php');

if(isset($_GET['rango'])){
	$result = array();
	$completeRange = new CompleteRange($_GET['rango']);
	$result['result'] = $completeRange->build();

	echo json_encode($result);
}