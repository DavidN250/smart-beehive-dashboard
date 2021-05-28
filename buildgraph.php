<?php 

require_once 'config.php';
require_once 'class/User.php';
require_once 'class/Hive.php';



if (isset($_POST['avgtemp'])) {
	# code...
	$user=new User($con, $_SESSION["userLoggedIn"]);
	$hives=$user->getHives();
	for($i=0;$i<count($hives);$i++){
		$hive=new Hive($con,$hives[$i]);
		//$av=array_sum($hive->getDailyTemperature($day))/count($hives);[

		$onehive=$hive->getDailyTemperature(date("Y-m-d "));
		$data="";
		for($i=0;$i<count($onehive);$i++){

           $data.= $onehive[$i].",";
		}
		$data=chop($data, ",");
		echo $data;
	}


}

if (isset($_POST['avghum'])) {
	# code...
	$user=new User($con, $_SESSION["userLoggedIn"]);
	$hives=$user->getHives();
	for($i=0;$i<count($hives);$i++){
		$hive=new Hive($con,$hives[$i]);
		//$av=array_sum($hive->getDailyTemperature($day))/count($hives);[

		$onehive=$hive->getDailyHumidity(date("Y-m-d "));
		$data="";
		for($i=0;$i<count($onehive);$i++){

           $data.= $onehive[$i].",";
		}
		$data=chop($data, ",");
		echo $data;
	}
}
if (isset($_POST['avgsound'])) {
	# code...
	$user=new User($con, $_SESSION["userLoggedIn"]);
	$hives=$user->getHives();
	for($i=0;$i<count($hives);$i++){
		$hive=new Hive($con,$hives[$i]);
		//$av=array_sum($hive->getDailyTemperature($day))/count($hives);[

		$onehive=$hive->getDailySound(date("Y-m-d "));
		$data="";
		for($i=0;$i<count($onehive);$i++){

           $data.= $onehive[$i].",";
		}
		$data=chop($data, ",");
		echo $data;
	}
}
if (isset($_POST['avgwght'])) {
	# code...
	$user=new User($con, $_SESSION["userLoggedIn"]);
	$hives=$user->getHives();
	for($i=0;$i<count($hives);$i++){
		$hive=new Hive($con,$hives[$i]);
		//$av=array_sum($hive->getDailyTemperature($day))/count($hives);[

		$onehive=$hive->getMouthlyWeight(date("Y-m-d "));
		$data="";
		for($i=0;$i<count($onehive);$i++){

           $data.= $onehive[$i].",";
		}
		$data=chop($data, ",");
		echo $data;
	}
}


/////////////////////all
if (isset($_POST['avgtempall'])) {
	# code...
	$user=new User($con, $_SESSION["userLoggedIn"]);
	$hives=$user->getHives();
	$data="";
	 $size=Hive::getTemeratureinsertedtoday($con,$hives[0]);
	for ($j=0; $j <$size ; $j++) { 
		# code...	
      $sum=0;
	for($i=0;$i<count($hives);$i++){
         $hive=new Hive($con,$hives[$i]);
         $te=$hive->getDailyApiaryTemperature(date("Y-m-d"));
		$sum=$sum+$te[$j];
	
	}
	 $data.=$sum.",";
	$sum=0;

	}

		$data=chop($data, ",");
		echo $data;
  

}

if (isset($_POST['avghumall'])) {
	# code...
	$user=new User($con, $_SESSION["userLoggedIn"]);
	$hives=$user->getHives();
	$data="";
	 $size=Hive::getTemeratureinsertedtoday($con,$hives[0]);
	for ($j=0; $j <$size ; $j++) { 
		# code...	
      $sum=0;
	for($i=0;$i<count($hives);$i++){
         $hive=new Hive($con,$hives[$i]);
         $te=$hive->getDailyApiaryHumidity(date("Y-m-d"));
		$sum=$sum+$te[$j];
	
	}
	 $data.=$sum.",";
	$sum=0;

	}

		$data=chop($data, ",");
		echo $data;
  
}
if (isset($_POST['avgsoundall'])) {
	# code...
	$user=new User($con, $_SESSION["userLoggedIn"]);
	$hives=$user->getHives();
	$data="";
	 $size=Hive::getSoundinsertedtoday($con,$hives[0]);
	for ($j=0; $j <$size ; $j++) { 
		# code...	
      $sum=0;
	for($i=0;$i<count($hives);$i++){
         $hive=new Hive($con,$hives[$i]);
         $te=$hive->getDailyApiarySound(date("Y-m-d"));
		$sum=$sum+$te[$j];
	
	}
	 $data.=$sum.",";
	$sum=0;

	}

		$data=chop($data, ",");
		echo $data;
}
if (isset($_POST['avgwghtall'])) {
	# code...
	$user=new User($con, $_SESSION["userLoggedIn"]);
	$hives=$user->getHives();
	$data="";
	 $size=Hive::getSoundinsertedtoday($con,$hives[0]);
	for ($j=0; $j <$size ; $j++) { 
		# code...	
      $sum=0;
	for($i=0;$i<count($hives);$i++){
         $hive=new Hive($con,$hives[$i]);
         $te=$hive->getDailyApiaryWeight(date("Y-m-d"));
		$sum=$sum+$te[$j];
	
	}
	 $data.=$sum.",";
	$sum=0;

	}

		$data=chop($data, ",");
		echo $data;
}




?>