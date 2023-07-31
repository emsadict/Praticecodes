<?php
function profile($name, $city,$score){
   echo "This is ".$name." from ".$city."";
   echo "";
   echo " He scored ".$score.". ";

}

profile("Seun","Ondo","20");
echo "<br> ";
profile("Olu","Oyo","30");

echo " <br>";

function difference($a, $b)
{
	$c = $a - $b;
	return $c;
	}
	
	echo "The diference of the numbers is:".difference(8,3);

?>