<?php 

/**
 * Eric
 */
class User
{
	private $con;
	private $sqlData;
	private $hivesArray = array();
	
	function __construct($con,$username)
	{
		# code...
		$this->con=$con;

        $query = $this->con->prepare("SELECT * FROM users WHERE email = :un OR phone=:un");
        $query->bindParam(":un", $username);
        $query->execute();

        $this->sqlData = $query->fetch(PDO::FETCH_ASSOC);
	}
	    public static function login($con,$un, $pw) {
       // $pw = hash("sha512", $pw);

        $query = $con->prepare("SELECT * FROM users WHERE ( email=:un  OR phone=:un)  AND password=:pw");
        $query->bindParam(":un", $un);
        $query->bindParam(":pw", $pw);

        $query->execute();

        if($query->rowCount() == 1) {
            return true;
        }
        else {
            //array_push($this->errorArray, Constants::$loginFailed);
            return false;
        }
    }
    public static function isLoggedIn() {
        return isset($_SESSION["userLoggedIn"]);
    }
    public function getNames()
    {
    	# code...
    	return $this->sqlData['names'];
    }
    public function getHives()
    {
    	# code...
        $id=$this->sqlData['id'];
        $query = $this->con->prepare("SELECT serial_number FROM hive WHERE user_id = :un");
        $query->bindParam(":un", $id);
        $query->execute();
        foreach ($query as $row) {
        	  array_push($this->hivesArray,$row['serial_number']);

        }
        return $this->hivesArray;

    }
}


?>