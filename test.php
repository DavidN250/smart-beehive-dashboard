<?php 
//require_once 'class/Hive.php';
 require_once 'class/User.php';
require_once 'config.php';
$u=new User($con,'0788236167');
$hives=$u->getHives();
	for($i=0;$i<count($hives);$i++){
		echo $hives[$i];
}
echo "hive";;



$t=0;
for ($i=0; $i < count($hive); $i++) { 
	# code...
	$t=$t+getTemp($hive[$i]);
}
function getTemp($i)
{
	# code...
	$allhiveTemp=[12];
	return $allhiveTemp[$i];

}
?>