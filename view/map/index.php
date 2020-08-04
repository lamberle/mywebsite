<?php
	$adresse = "haiti";
	if($adresse == null || $adresse == "" || !is_string($adresse))
		return false;
	$url = 'https://maps.googleapis.com/maps/api/geocode/json?address='.str_replace(" ","+",$adresse).'&key=AIzaSyC0horFs-HwalFj6i-knMncHaL77TEjypE';
	//$url = 'http://maps.google.com/maps/api/geocode/xml?key=AIzaSyC0horFs-HwalFj6i-knMncHaL77TEjypE&address='.str_replace(" ","+",$adresse).'&sensor=false';
	$google_req=file_get_contents($url);
	$json_result = json_decode($google_req, true);
	$x0 = 384;
	$y0 = 259;
	$w = 920;
	$h = 439;
	$sw = 920/360;
	$sh = 439/180;
	$y = $json_result['results'][0]['geometry']['location']['lat'];
	$x = $json_result['results'][0]['geometry']['location']['lng'];
	$x1 = $x0 + $x*$sh;
	$y1 = $y0 - $y*$sw;
	//var_dump($a['results']);
	/*$xml=file_get_contents($url);
	var_dump($xml);
	$root = simplexml_load_string($xml);
	$r = $root[0];
	$x = $r['lat'];
	$y = $r['lng'];
	var_dump($x);
	echo "PLOP" + $x;
	echo $y;
	var_dump($root);*/

?>
<div>
<div class='map-point' <?php echo 'style="top:'.$y1.'px;left:'.$x1.'px;"'; ?>></div>
<img src='/lamberle/ressources/map2.png' />
</div>