
<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>registration</title>

	<style>
        body{
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #f0f2f5;
        }
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        .containere{
            width: 300px;
            height: 500px;
            background: #fff;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
            padding: 0 15px;
            font-family: 'Poppins',sans-serif;
            border-radius: 10px;
            box-shadow: 0 10px 20px rgba(95,95,95,.2);
        }
        .intro-text p{
            margin: 5px 0;
            font-size: 13px;
        }
        .intro-text p a{
            color: #121212;
        }
        form{
            height: 330px;
            display: flex;
            flex-direction: column;
            justify-content: space-evenly;
        }
        form input{
            padding: 12px 7px;
            outline: none;
            border: 1px solid #8c8f94;
        }
        form input:focus{
            border-color: #16056b;
        }
        .check-box{
            display: flex;
        }
        
        .check-box label{
            font-size:10px;
            padding: 0 5px;
        }
        form button{
            border: none;
            outline: none;
            padding: 11px 0;
            background: #16056b;
            color:#fff;
            font-size: 18px;
            box-shadow: 0 7px 15px rgba(22,5,107,.3);
            font-family: 'Poppins', sans-serif;

        }
        .msg{
        color:red; 
        
        }
        strong{
        font-size:18px;
        }
      
    </style>

</head>
<body>

<?php include("header.php") ?>

    <div class="containere">
        <div class="intro-text">
        <h5 class="msg">
<!--             	<%
			if(session.getAttribute("msg")!=null)
				{
				out.print(session.getAttribute("msg"));
				session.removeAttribute("msg");
				}
            	else if(session.getAttribute("exCeptionMsg")!=null)
            	{
            		out.print(session.getAttribute("exCeptionMsg"));
    				session.removeAttribute("exCeptionMsg");
            	}

				%> -->
                <?php
                if(isset($_SESSION['duplicate']))
                {
                    echo $_SESSION['duplicate'];
                    unset($_SESSION['duplicate']);
                }
                elseif(isset($_SESSION['emptness']))
                {
                    echo $_SESSION['emptness'];
                    unset($_SESSION['emptness']);
                }
                ?>
            </h5>

            
            <p> Back to the Dashboard? <a href="../admin.php"><strong>Back</strong></a></p>
        </div>

        <?php

        require 'db.php';

        $id = $_GET['id'];

        $sql = 'SELECT student.std_id, student.fname, student.lname, student.gender, student.Reg_num, student.level, student.dpt, hostel.block_name, hostel.room_number FROM student, hostel WHERE student.std_id= hostel.std_id and student.std_id=:id';
        $statement = $connection->prepare($sql);
        $statement->execute([':id' => $id ]);
        $people = $statement->fetch(PDO::FETCH_OBJ);




         if (isset ($_POST['fname'])  && isset($_POST['lname']) && isset($_POST['regNumber']) &&  isset($_POST['dpt']) &&  isset($_POST['level']) &&  isset($_POST['gender']) &&  isset($_POST['blockName']) &&  isset($_POST['roomNumber']) ) 
        {


             $fname     = $_POST['fname'];
             $lname     = $_POST['lname'];
             $gender    = $_POST['gender'];
             $regNumber = $_POST['regNumber'];
             $dpt       = $_POST['dpt'];
             $level     = $_POST['level'];
             $blockName = $_POST['blockName'];
             $roomNumber = $_POST['roomNumber'];
             
         try
         {


               $sql1 = 'UPDATE student SET student.fname=:fname, student.lname=:lname, student.gender=:gender, student.Reg_num=:Reg_num, student.level=:level, student.dpt=:dpt  WHERE student.std_id=:id';
              $sql2 = 'UPDATE hostel SET hostel.block_name=:block_name, hostel.room_number=:room_number WHERE hostel.std_id=:id';
              $statement1 = $connection->prepare($sql1);
              $statement2 = $connection->prepare($sql2);

              if ($statement1->execute([':fnam' =>$fname, ':lname'=>$lname, ':gender'=>$gender, ':Reg_num'=>$Reg_num, ':level'=>$level, ':dpt'=>$dpt, ':id' => $id]) && $statement2->execute([':blockName'=>$blockName, ':room_number'=>$roomNumber, ':id'=>$id])) 
              { 
                header("Location: ../admin.php");
              }
  
         }
         catch(PDOException $e)
         {
            echo $e->getMessage();
         }
      


        }




        ?>



        <form  method="GET" action="../Update.php?id=<?php echo($id)?>">
            <input type="text" value="<?=$people->fname; ?>" name="fname" placeholder="Fast Name" required/>
            <input type="text" value="<?=$people->lname; ?>" name="lname" placeholder="Last Name" required/>
            <input type="text" value="<?=$people->Reg_num; ?>" name="regNumber" placeholder="Reg Number" required/>
            <div>
                <label>Department:</label> <select name="dpt">
                	<option selected disabled>Choose</option>	  
                    <option value="it" <?php if($people->dpt == "it"){echo "selected";}?>>It</option>
                    <option value="et" <?php if($people->dpt == "et"){echo "selected";}?>>Et</option>
                    <option value="re" <?php if($people->dpt == "re"){echo "selected";}?>>Re</option>
                    <option value="mt" <?php if($people->dpt == "mt"){echo "selected";}?>>Mt</option>
                  </select><br>
            </div>
            <div>
                <label>Level:</label> <select name="level">	 
                	<option selected disabled>Choose</option>	 
                    <option value="1" <?php if($people->level == "1"){echo "selected";}?>>1</option>
                    <option value="2" <?php if($people->level == "2"){echo "selected";}?>>2</option>
                    <option value="3" <?php if($people->level == "3"){echo "selected";}?>>3</option>
                  </select><br>
            </div>
            <div>
               <label for="Gender">Gender:</label><input type="radio" name="gender" value="male" <?php if($people->gender == "male"){echo "checked";}?>>Male
               <input type="radio" name="gender" value="female" <?php if($people->gender == "female"){echo "checked";}?>>Female 
            </div>
            <!-- <input type="email" name="email" placeholder="Email" required/> -->
            <input type="text" value="<?=$people->block_name; ?>" name="blockName" placeholder="blockName" required/>
            <input type="text" value="<?=$people->room_number; ?>" name="room" placeholder="roomNumber" required/>
          <!--   <div class="check-box">
                <input type="checkbox" id="check">
                <label for="check">I have read and agree to the <a href="#">Term & Privacy</a></label>
            </div> -->
            <button type="submit">Update</button>
        </form>
    </div>

</body>
</html>