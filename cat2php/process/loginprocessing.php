<?php
session_start();
require 'db.php';
$sql = 'SELECT * FROM student';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);

  $username = $_POST['uName'] ;
  $passwd = $_POST['passwd'];

	if ($username == "moussa" && $passwd == "321") 
	  	{
	  		header("Location: ../admin.php");
	  		exit();
	  	}

foreach($people as $person):
	if(($person->Reg_num == $username) && ($person->password == $passwd))
	  {
	  
	   	$_SESSION['stdid'] = $person->std_id; 
	   	 header("Location: ../booking.php");
	   	 exit();
	  }
	   else
	   {
	   	$_SESSION['unknown'] = "UnKnown User"; 
	   	header("Location: ../login.php");
	   }
	   
endforeach;
	   
?>
