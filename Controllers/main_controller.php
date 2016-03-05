<?php

$metricRequested;
$countriesFrom;
$countriesTo;

if($_SERVER['REQUEST_METHOD'] == "POST"){

	$metricRequested = $_POST['metric'];
	$countriesFrom = $_POST['country_from'];
	$countriesTo = $_POST['country_to'];

	header ("Location:  http://" . $_SERVER['HTTP_HOST'] . dirname($_SERVER['PHP_SELF']) . "/chart_controller.php?metric="
	.$metricRequested."&countryFrom=".$countriesFrom."&countryTo=".$countriesTo);
                         
	exit();

}

include($_SERVER['DOCUMENT_ROOT'].'/pinger/Views/main_view.html');
?>

