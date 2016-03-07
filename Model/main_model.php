<?php

function queryBuilder($metric, $countriesFrom, $countriesTo){
	
	$query = "select c.name, temp.throughput FROM (SELECT meas.destination_country_id AS country, cast(avg(meas.throughput) as INTEGER) AS  throughput
FROM pinger_measurement meas, country c
WHERE meas.source_country_id = c.id AND c.name = 'United States'
GROUP BY country) as temp, country c WHERE temp.country = c.id ORDER BY temp.throughput";


	return queryDB($query);

}


function queryDB($query){
	
	/*$values = array();

	$dsn = "DSN=Sample Cloudera Impala DSN 64; host=192.168.1.101; port=21050; database=default;";

        $conn = odbc_connect($dsn,'','');
        $result = odbc_exec($conn, $query);

        while($row = odbc_fetch_array($result)){
		$values[] = $row;
	}*/


	//Stub
	$values1 =  array(array("country" => "Bangladesh","throughput" => 60),
				array("country" => "Ghana","throughput" => 69),
				array("country" => "Nepal","throughput" => 77),
				array("country" => "Burkina Faso","throughput" => 78),
				array("country" => "Tanzania","throughput" => 79),
				array("country" => "Uzbekistan","throughput" => 86),
				array("country" => "Mozambique","throughput" => 89),
				array("country" => "Uganda","throughput" => 95),
				array("country" => "Mongolia","throughput" => 95),
				array("country" => "Rwanda","throughput" => 97),
				array("country" => "Georgia","throughput" => 100),
				array("country" => "French Polynesia","throughput" => 126),
				array("country" => "Paraguay","throughput" => 129),
				array("country" => "South Africa","throughput" => 146),
				array("country" => "China","throughput" => 174),
				array("country" => "Mali","throughput" => 179),
				array("country" => "Brunei","throughput" => 188),
				array("country" => "Pakistan","throughput" => 194),
				array("country" => "Benin","throughput" => 201),
				array("country" => "Uruguay","throughput" => 224),
				array("country" => "Ukraine","throughput" => 243),
				array("country" => "Indonesia","throughput" => 248),
				array("country" => "Chile","throughput" => 271),
				array("country" => "Jordan","throughput" => 276),
				array("country" => "Singapore","throughput" => 278),
				array("country" => "Russia","throughput" => 282),
				array("country" => "Malaysia","throughput" => 288),
				array("country" => "Egypt","throughput" => 291),
				array("country" => "Turkey","throughput" => 292),
				array("country" => "Brazil","throughput" => 303),
				array("country" => "Senegal","throughput" => 310),
				array("country" => "Taiwan","throughput" => 312),
				array("country" => "Poland","throughput" => 325),
				array("country" => "Israel","throughput" => 329),
				array("country" => "Macedonia","throughput" => 345),
				array("country" => "Algeria","throughput" => 347),
				array("country" => "Spain","throughput" => 350),
				array("country" => "Tunisia","throughput" => 371),
				array("country" => "Japan","throughput" => 395),
				array("country" => "Lithuania","throughput" => 396),
				array("country" => "Finland","throughput" => 405),
				array("country" => "Iceland","throughput" => 417),
				array("country" => "South Korea","throughput" => 445),
				array("country" => "Estonia","throughput" => 447),
				array("country" => "Greece","throughput" => 447),
				array("country" => "Italy","throughput" => 468),
				array("country" => "Portugal","throughput" => 488),
				array("country" => "Denmark","throughput" => 489),
				array("country" => "El Salvador","throughput" => 500),
				array("country" => "Slovakia","throughput" => 503),
				array("country" => "Hungary","throughput" => 511),
				array("country" => "Ireland","throughput" => 517),
				array("country" => "France","throughput" => 519),
				array("country" => "Germany","throughput" => 529),
				array("country" => "Switzerland","throughput" => 530),
				array("country" => "Guatemala","throughput" => 546),
				array("country" => "Netherlands","throughput" => 636),
				array("country" => "Honduras","throughput" => 643),
				array("country" => "United Kingdom","throughput" => 667),
				array("country" => "Mexico","throughput" => 938),
				array("country" => "Canada","throughput" => 1218),
				array("country" => "United States","throughput" => 6135)
				);

	$resultSet = json_encode($values1);
	//echo $resultSet;
	return $resultSet;

	



}



?>
