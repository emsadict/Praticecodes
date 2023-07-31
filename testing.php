<?php
$months = array("January", "February", "March", "May", "June", "July", "August", "September", "October", "November", "December");

for($months_number=0; $months_number<count($months); $months_number++)
{
	echo "$months[$months_number]<br>";
}
echo "<br>";


$ade= array('good','bad','saw');
$ade[3]='mail';
$ade1=$ade[3];
//echo "$ade1";
//array_unshift($ade,'again');
//$reverse=array_reverse($ade);

for ($i=0; $i <count($ade) ; $i++) { 
	echo "$ade[$i] <br>";
}

//$random= array_rand($ade);
//echo"$random";
//$print=
//var_dump($reverse);
//echo "$print";
echo "<br>";
//print_r($reverse);
$numb=[1,2,3,4,5,6,7,8,9,10];
for ($i=0; $i <count($numb); $i++) { 
//	echo "$numb[$i]<br>";
	//echo "sum($i)<br>";
}

//$sum=0;
//$n=10;
//for ($i=1; $i <=$n ; $i++) { 
//	$sum +=$i;
//	echo "$sum <br>";
//}
//$n=10;
$i=1;
$sum=0;
while ($i <=10) {
	$sum=$sum+$i;
	$i++;
	echo "$sum<br>";
}
for ($i=0; $i <=5 ; $i++) { 
	echo "This is loop numbre $i <br>";
}
echo "<br>";
$i=0;
while ($i<=5) {
	// code...
	echo "$i<br>";
	$i++;
}
echo "<br>";
$i=2;
do {
	$i++;
	echo "$i<br>";
} while ($i<=10);
echo "<br>";

$var=array('a','b','c','d','e','f','g','h');
foreach ($var as $key ) {
	echo "$key<br>";
}
echo "<br>";
$var=array('a','b','c','d','e','f','g','h');
foreach ($var as $key => $value) {
	echo "$key<br>";
}
?>
<?php
$names = array("Fabio", "Klevi", "John");
?>
<?php
// this is a rather manual way of doing it
$names[0] = "Fabio";
$names[1] = "Klevi";
$names[2] = "John";

//echo "my friens are " .$names[0].", ".$names[1].", ".$names[2];
$arrayLength=count($names);
for ($i=0; $i <$arrayLength; $i++) { 
	echo "$names[$i]";
	echo " ";
}

?>

