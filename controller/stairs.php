<?php
require_once('../class/stair.php');

if(isset($_GET['lenght'])){
	$stairs = new Stairs($_GET['lenght']);
	$result = array();
	$result['asc'] = $stairs->getStairAsc();
	$result['desc'] = $stairs->getStairDesc();
	$result['numeric'] = $stairs->getNumericStair();

	echo json_encode($result);
}