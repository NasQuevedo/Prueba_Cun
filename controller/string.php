<?php
require_once('../class/ChangeString.php');

if(isset($_GET['string'])){
	$result = array();
	$changeString = new ChangeString($_GET['string']);
	$result['result'] = $changeString->build();

	echo json_encode($result);
}