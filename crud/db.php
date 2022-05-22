echo  $card." card is received"; 

//=====
define('DB_SERVER','localhost');
define('DB_USER','root');
define('DB_PASS' ,'');
define('DB_NAME','iot_check');
$con = mysqli_connect(DB_SERVER,DB_USER,DB_PASS,DB_NAME);
// Check connection
if (mysqli_connect_errno())
{
 echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
else
{
check();
$insertQuery = mysqli_query($con,"INSERT INTO `iot_users`(`userID`,`username`,`usercard`) 
                         VALUES (0,'$uname','$card')");

                        if ($insertQuery) {
                            echo "inserted";
                        } else {
                            echo "failed to insert";
                        }

	}

}






//=======

}

function check()
{
  $sql = "select username from iot_users where username=".$uname;
	if(mysqli_num_rows($sql)){
	echo "User Exist";
}
  
}

function showProcess()
{
  
  echo "done";
}
?>