

<?php session_start();?>
<?php
if (!isset($_SESSION['stdid']))
{
  header("Location:login.php");
}


?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>boking</title>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <style>
body{
background-color: #7D869C;
position:relative;
}
.cont{
 background-color: #fff;
 box-shadow: 0 10px 20px rgba(95,95,95,.2);
}
 .logedInUser{
 width:100px;
 heght:100px;
 margin-left:1100px;
border:1px solid black;
color:red;
 }
 .logout a{
  width:100px;
  heght:100px;
  margin-left:1260px;
  border:1px solid black;
  display:block;
 }
 .msg{
 color:red;
 margin-left:350px;
 }
 
 .bg
 {
 	background-color: #4C5C68;
 }
 .blo
 {
 	color:white;
 }
 </style>

</head>

<body>

	<?php include("header.php") ?>


 	
 
<br><br><br>

	<h3 class="msg">

	<?php
		if (isset($_SESSION['duplicate'])) {
			echo $_SESSION['duplicate'];
			unset($_SESSION['duplicate']);
		}
		elseif (isset($_SESSION['isfull']))
		{
			echo $_SESSION['isfull'];
			unset($_SESSION['isfull']);
		}
		elseif(isset($_SESSION['feedback'] ))
		{
			echo $_SESSION['feedback'];
			unset($_SESSION['feedback']);
		}

	?>
	</h3>
	<div class="pb-5 ">

		<div class="row p-5 ">
		
			<div class="col-sm-3 border p-3 mr-2 mb-2">
				<form action="process/bookingprocessing2.php">
				<input type="hidden" name="blockName" value="Brock1">
				<input type="hidden" name="stdId" value="<?=$_SESSION['stdid'];?>">
				<label class="blo">Brock1:</label> <select name="room" class="form-control-sm form-select "  >
						  <option value="1">room 1</option>
				    	  <option value="2">room 2</option>
				    	  <option value="3">room 3</option>
				        </select><br><br>
				 <input type="submit" class="btn btn-success " value="Send">
				</form>
			</div>
			
			<div class="col-sm-3 border p-3 mr-2 mb-2">
				<form action="process/bookingprocessing2.php">
				<input type="hidden" name="blockName" value="Brock2">
				<input type="hidden" name="stdId" value="<?=$_SESSION['stdid'];?>" >
				<label class="blo">Brock2:</label> <select name="room" class="form-control-sm form-select " >	  
						  <option value="1">room 1</option>
				    	  <option value="2">room 2</option>
				    	  <option value="3">room 3</option>
				        </select><br><br>
				 <input type="submit" class="btn btn-success" value="Send">
				</form>	
			</div>	
			
			<div class="col-sm-3 border p-3 mr-2 mb-2">
				<form action="process/bookingprocessing2.php">
				<input type="hidden" name="blockName" value="GB_Floo1"></input>
				<input type="hidden" name="stdId" value="<?=$_SESSION['stdid'];?>" >
				<label class="blo">GB_Floo1:</label> <select name="room" class="form-control-sm form-select " >
						  <option value="1">room 1</option>
				    	  <option value="2">room 2</option>
				    	  <option value="3">room 3</option>
				        </select><br><br>
				 <input type="submit" class="btn btn-success" value="Send">
				</form>
			</div>	
			
			<div class=" col-sm-3 border p-3 mr-2 mb-2">
				<form action="process/bookingprocessing2.php">
				<input type="hidden" name="blockName" value="GB_Floo2">
				<input type="hidden" name="stdId" value="<?=$_SESSION['stdid'];?>">
				<label class="blo">GB_Floo2:</label> <select name="room" class="form-control-sm form-select " >
						  <option value="1">room 1</option>
				    	  <option value="2">room 2</option>
				    	  <option value="3">room 3</option>
				        </select><br><br>
				 <input type="submit" class="btn btn-success" value="Send">
				</form>
			</div>	
			
			<div class="col-sm-3 border p-3 mr-2 mb-2">
				<form action="process/bookingprocessing2.php">
				<input type="hidden" name="blockName" value="NB_Floo1">
				<input type="hidden" name="stdId" value="<?=$_SESSION['stdid'];?>">
				<label class="blo">NB_Floo1:</label> <select name="room" class="form-control-sm form-select " >	  
						  <option value="1">room 1</option>
				    	  <option value="2">room 2</option>
				    	  <option value="3">room 3</option>
				        </select><br><br>
				 <input type="submit" class="btn btn-success" value="Send">
				</form>
			</div>	
			
			<div class="col-sm-3 border p-3 mb-2">
				<form action="process/bookingprocessing2.php">
				<input type="hidden" name="blockName" value="NB_Floo2">
				<input type="hidden" name="stdId" value="<?=$_SESSION['stdid'];?>">
				<label class="blo">NB_Floo2:</label> <select name="room" class="form-control-sm form-select " >			  
						  <option value="1">room 1</option>
				    	  <option value="2">room 2</option>
				    	  <option value="3">room 3</option>
				        </select><br><br>
				 <input type="submit" class="btn btn-success" value="Send">
				</form>
			</div>													
			
		</div>
	
	</div>

</div>



</body>

</html>