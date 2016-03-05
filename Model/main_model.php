<?php

function queryBuilder($metric, $countriesFrom, $countriesTo){

	$query = "SELECT dst_country FROM pinger_measurement meas, country dst_country, time t" ;

	return queryDB($query);

}


function queryDB($query){

	//Implement connectinon with Impala

	//Stub
	$values =  array(array("country" => "Brazil", "throughput" => 100),
					array("country" => "Uruguay", "throughput" => 200),
					array("country" => "Chile", "throughput" => 400),
					array("country" => "Bolivia", "throughput" => 454),
					array("country" => "Paraguay", "throughput" => 789),
					array("country" => "Guiana", "throughput" => 23),
					array("country" => "Argentina", "throughput" => 343),
					array("country" => "Colombia", "throughput" => 934),
					array("country" => "Venezuela", "throughput" => 194),
					array("country" => "Equador", "throughput" => 454),
					array("country" => "Acre", "throughput" => 589),
					array("country" => "Brasilia", "throughput" => 700)
					);

	$resultSet = json_encode($values);

	return $resultSet;

	



}

	

?>