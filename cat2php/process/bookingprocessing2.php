<?php
session_start();
  $blockName = $_GET['blockName'] ;
  $roomNumber = $_GET['room'];
  $stdid = $_GET['stdId'];
require 'db.php';
$sql = sprintf("SELECT count(room_number) FROM hostel WHERE block_name='%s' AND room_number=%d ",$blockName,$roomNumber);
$statement = $connection->prepare($sql);
$statement->execute();
$count = $statement->fetchColumn();

if ($count==8) 
{

	$_SESSION['isfull'] = "Room ".$roomNumber." is Full Try others";

	 header("Location: ../booking.php");
}
else
{
	if (isset ($_GET['blockName'])  && isset($_GET['room']) ) 
	{


		try
		{

			$sql = 'INSERT INTO hostel(std_id, block_name, room_number) VALUES(:id,:block_name, :room_number)';
	  		$statement = $connection->prepare($sql);
  	  		if ($statement->execute([':id' => $stdid,':block_name' => $blockName, ':room_number' => $roomNumber])) 
  			{
     	 		$message = 'data inserted successfully';
  			}

  			$_SESSION['feedback'] = "Successfully ".$blockName." Room".$roomNumber." Reserved";
  			header("Location: ../booking.php");

		}
		catch(PDOException $e) 
		{
			require 'db.php';
	 		echo $e->getMessage();
	 		
			$sql = 'SELECT fname FROM student where std_id='.$stdid;
			$statement = $connection->prepare($sql);
			$statement->execute();
			$std = $statement->fetch(PDO::FETCH_OBJ);
			$stdName = $std->fname;
	 		$_SESSION['duplicate'] = $stdName." already make reservation"; 
	 		header("Location: ../booking.php");
		}
	 
	



	}
}

?>