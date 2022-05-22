

<?php
session_start();


// if (isset ( $_POST['fname']   )  && isset($_POST['lname']) && isset($_POST['gender']) && isset($_POST['regNumber'])&& isset($_POST['level'])&& isset($_POST['dpt'])&& isset($_POST['password']))

class User
{
	public $fname  = "";
    public $lname  = "";
    public $gender = "";
    public $regNumber = "";
    public $dpt = "";
    public $level;
    public $passwd;
    
    public function __construct($fname, $lname, $gender, $regNumber, $level, $dpt, $passwd )
    {

    	if (isset ($fname)  && isset($lname) && isset($gender) && isset($regNumber)&& isset($dpt)&& isset($level)&& isset($passwd))
    	{
    		require 'db.php';

	  		$this->fname = $fname;
	       	$this->lname = $lname;
	       	$this->gender = $gender;
	       	$this->regNumber = $regNumber;
	       	$this->dpt = $dpt;
	       	$this->level = $level;
	       	$this->passwd = $passwd;

	       	
	       	$sql = 'INSERT INTO student( fname, lname, gender, Reg_num, level, dpt, password) VALUES(:fname, :lname, :gender, :regNumber, :level, :dpt, :passwd)';

			$statement = $connection->prepare($sql);

			if ($statement->execute([':fname' => $this->fname, ':lname' => $this->lname, ':gender' => $this->gender, ':regNumber' => $this->regNumber,':level'=>$this->level, ':dpt' => $this->dpt, ':passwd' => $this->passwd ])) 
			{
			    $_SESSION['message'] = 'data inserted successfully';
			     header("Location: ../login.php");
			}

    	}
     



    }

}
		
$user = new User($_POST['fname'], $_POST['lname'], $_POST['gender'], $_POST['regNumber'], $_POST['level'], $_POST['dpt'], $_POST['password'] );




?>

