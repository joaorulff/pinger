<?php
	

	include($_SERVER['DOCUMENT_ROOT'].'/pinger/Model/main_model.php');

	$result = queryDB("test");

	include($_SERVER['DOCUMENT_ROOT'].'/pinger/Views/chart_view.html');

?>