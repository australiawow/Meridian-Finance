<?php
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING | E_DEPRECATED));


if ($_POST) {
	$post = $_POST;
	
	
	
	
	
	$result = array("result" => $post);
	
	echo json_encode($result);
	exit();
}
