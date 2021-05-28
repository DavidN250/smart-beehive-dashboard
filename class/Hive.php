<?php 

/**
 * Eric
 */
class Hive
{
	private $con;
	private $sqlData;
    private $serialnuber;
	
	function __construct($con,$serialnuber)
	{
		# code...
		$this->con=$con;
        $this->serialnuber=$serialnuber;

        $query = $this->con->prepare("SELECT * FROM hive WHERE serial_number = :un ");
        $query->bindParam(":un", $serialnuber);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
	}
    public function getCurrentTemp()
    {
        # code...

        $query = $this->con->prepare("SELECT * FROM tempandhum WHERE serial_number = :un ORDER BY  id DESC LIMIT 1");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC)['temperature'];
    }
       public static function getTemeratureinsertedtoday($con,$id)
    {
        # code...
          $query = $con->prepare("SELECT * FROM tempandhum WHERE serial_number = :un ");
        $query->bindParam(":un", $id);
        $query->execute();
        $j=0;
        $day=date("Y-m-d");
       foreach ($query as $row) {
         
        if (date("Y-m-d" ,strtotime($row['timeoccur']))==$day) {
            # code...
            $j++;
        } 
    }
        return $j;
    }
         public static function getSoundinsertedtoday($con,$id)
    {
        # code...
          $query = $con->prepare("SELECT * FROM tempandhum WHERE serial_number = :un ");
        $query->bindParam(":un", $id);
        $query->execute();
        $j=0;
        $day=date("Y-m-d");
       foreach ($query as $row) {
         
        if (date("Y-m-d" ,strtotime($row['timeoccur']))==$day) {
            # code...
            $j++;
        } 
    }
        return $j;
    }
        public function getCurrentHumidity()
    {
        # code...

        $query = $this->con->prepare("SELECT * FROM tempandhum WHERE serial_number = :un ORDER BY  id DESC LIMIT 1");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC)['humidity'];
    }    public function getCurrentSound()
    {
        # code...

        $query = $this->con->prepare("SELECT * FROM sound WHERE serial_number = :un ORDER BY  id DESC LIMIT 1");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC)['description'];
    }
     public function getCurrentWeight()
    {
        # code...

        $query = $this->con->prepare("SELECT * FROM weight WHERE serial_number = :un ORDER BY  id DESC LIMIT 1");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();

        return $query->fetch(PDO::FETCH_ASSOC)['weight'];
    }
    public function getSound()
    {
         $query = $this->con->prepare("SELECT * FROM sound WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();

        return $query;

    }
    public function getWeight()
    {
         $query = $this->con->prepare("SELECT * FROM weight WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();

        return $query;

    }
    public function getDailyTemperature($day)
    {

        # code...
        //$today=date("Y-m-d",strtotime("today"));
         $hourTemArray = array();
         $temparray=array();
        $query = $this->con->prepare("SELECT * FROM tempandhum WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();
        $j=0;
       foreach ($query as $row) {
         
        if (date("Y-m-d " ,strtotime($row['timeoccur']))==$day) {
            # code...
            array_push($temparray, $row['temperature']);
            $j++;
        }  
        if ($j==2) {
                 # code...
            $j=0;
           //for($i=0;$i<2;$i++){
               
               $av=array_sum($temparray)/2;
               array_push($hourTemArray, $av);
               unset($temparray);//delete array
               $temparray=array();//recreate
               //}
             }     
       //array_push($hourTemArray, $row['temperature']);

        }
        return $hourTemArray;
    }
        public function getDailyApiaryTemperature($day)
    {

        # code...
        //$today=date("Y-m-d",strtotime("today"));
         $hourTemArray = array();
         //$temparray=array();
        $query = $this->con->prepare("SELECT * FROM tempandhum WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();
        $j=0;
       foreach ($query as $row) {
             //=date("Y-m-d");
        if (date("Y-m-d" ,strtotime($row['timeoccur']))==$day) {
            # code...
            array_push($hourTemArray, $row['temperature']);
            //$j++;
        }  
           
       //array_push($hourTemArray, $row['temperature']);

        }
        return $hourTemArray;
    }

    public function getDailyHumidity($day)
    {
        //$today=date("Y-m-d",strtotime("today"));
         $hourTemArray = array();
         $temparray=array();
        $query = $this->con->prepare("SELECT * FROM tempandhum WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();
        $j=0;
       foreach ($query as $row) {
         
        if (date("Y-m-d " ,strtotime($row['timeoccur']))==$day) {
            # code...
            array_push($temparray, $row['humidity']);
            $j++;
        }  
        if ($j==2) {
                 # code...
            $j=0;
           //for($i=0;$i<2;$i++){
               
               $av=array_sum($temparray)/2;
               array_push($hourTemArray, $av);
               unset($temparray);//delete array
               $temparray=array();//recreate
               //}
             }     
       //array_push($hourTemArray, $row['temperature']);

        }
        return $hourTemArray;
    }

    public function getDailyApiaryHumidity($day)
    {
        //$today=date("Y-m-d",strtotime("today"));
     //$today=date("Y-m-d",strtotime("today"));
         $hourTemArray = array();
         //$temparray=array();
        $query = $this->con->prepare("SELECT * FROM tempandhum WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();
        $j=0;
       foreach ($query as $row) {
             //=date("Y-m-d");
        if (date("Y-m-d" ,strtotime($row['timeoccur']))==$day) {
            # code...
            array_push($hourTemArray, $row['humidity']);
            //$j++;
        }  
           
       //array_push($hourTemArray, $row['temperature']);

        }
        return $hourTemArray;
    }
        public function getDailyApiarySound($day)
    {
        //$today=date("Y-m-d",strtotime("today"));
     //$today=date("Y-m-d",strtotime("today"));
         $hourTemArray = array();
         //$temparray=array();
        $query = $this->con->prepare("SELECT * FROM sound WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();
        $j=0;
       foreach ($query as $row) {
             //=date("Y-m-d");
        if (date("Y-m-d" ,strtotime($row['timeoccur']))==$day) {
            # code...
            array_push($hourTemArray, $row['sound']);
            //$j++;
        }  
           
       //array_push($hourTemArray, $row['temperature']);

        }
        return $hourTemArray;
    }
    public function getDailySound($day)
    {
        //$today=date("Y-m-d",strtotime("today"));
         $hourTemArray = array();
         $temparray=array();
        $query = $this->con->prepare("SELECT * FROM sound WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();
        $j=0;
       foreach ($query as $row) {
         
        if (date("Y-m-d " ,strtotime($row['timeoccur']))==$day) {
            # code...
            array_push($temparray, $row['sound']);
            $j++;
        }  
        if ($j==2) {
                 # code...
            $j=0;
           //for($i=0;$i<2;$i++){
               
               $av=array_sum($temparray)/2;
               array_push($hourTemArray, $av);
               unset($temparray);//delete array
               $temparray=array();//recreate
               //}
             }     
       //array_push($hourTemArray, $row['temperature']);

        }
        return $hourTemArray;
    }
        public function getMouthlyWeight($day)
    {
        //$today=date("Y-m-d",strtotime("today"));
         $hourTemArray = array();
         $temparray=array();
        $query = $this->con->prepare("SELECT * FROM weight WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();
        $j=0;
       foreach ($query as $row) {
         
        if (date("Y-m-d " ,strtotime($row['timeoccur']))==$day) {
            # code...
            array_push($temparray, $row['weight']);
            $j++;
        }  
        if ($j==2) {
                 # code...
            $j=0;
           //for($i=0;$i<2;$i++){
               
               $av=array_sum($temparray)/2;
               array_push($hourTemArray, $av);
               unset($temparray);//delete array
               $temparray=array();//recreate
               //}
             }     
       //array_push($hourTemArray, $row['temperature']);

        }
        return $hourTemArray;
    }
            public function getDailyApiaryWeight($day)
    {
        //$today=date("Y-m-d",strtotime("today"));
      $hourTemArray = array();
         //$temparray=array();
        $query = $this->con->prepare("SELECT * FROM weight WHERE serial_number = :un ");
        $query->bindParam(":un", $this->serialnuber);
        $query->execute();
        $j=0;
       foreach ($query as $row) {
             //=date("Y-m-d");
        if (date("Y-m-d" ,strtotime($row['timeoccur']))==$day) {
            # code...
            array_push($hourTemArray, $row['weight']);
            //$j++;
        }  
           
       //array_push($hourTemArray, $row['temperature']);

        }
        return $hourTemArray;
}
}

?>