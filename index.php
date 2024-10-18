<?php 
	session_start();

	include_once('core/file/core.php');

	$view = new core();
	$view->action_core();
?>