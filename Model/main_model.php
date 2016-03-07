<?php

function queryBuilder($metric, $countriesFrom, $countriesTo){
	
	$query = "select c.name, temp.throughput FROM (SELECT meas.destination_country_id AS country, cast(avg(meas.throughput) as INTEGER) AS  throughput
FROM pinger_measurement meas, country c
WHERE meas.source_country_id = c.id AND c.name = 'United States'
GROUP BY country) as temp, country c WHERE temp.country = c.id ORDER BY temp.throughput";


	return queryDB($query);

}


function queryDB($query){
	
	$values = array();

	$dsn = "DSN=Sample Cloudera Impala DSN 64; host=192.168.1.101; port=21050; database=default;";

        $conn = odbc_connect($dsn,'','');
        $result = odbc_exec($conn, $query);

        while($row = odbc_fetch_array($result)){
		$values[] = $row;
	}


	//Stub
	$values1 =  array(array("country" => "Brazil", "throughput" => 100),
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
	echo $resultSet;
	return $resultSet;

	



}



?>
