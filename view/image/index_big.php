<?php
	function spirale($images, $i, $x, $y) {		
		if($i == count($images)) {
			return "";
		}
		$im = $images[$i];
		if($i%2 == 0) {
			$orientation = "height";
			$not_orientation = "width";
			$x = $x/2;
			$a="";
		} else {
			$orientation = "width";
			$not_orientation = "height";
			$y = $y/2;
			$a = "";
		}
		return '<div class="spirale" style="height:'.$y.'px;width:'.$x.'px;"><img class="spirale-img" style="'.$orientation.':50%;'.$not_orientation.':100%;'.$a.'" src="'.$im->image_url.'" alt="'.$im->image_title.'">'.spirale($images, $i+1, $x, $y).'</div>';
	}
	echo "<div style='max-width:1000;max-height:1000px;'>".spirale($data, 0, 2000,1000)."</div>";

?>