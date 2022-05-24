<?php
require 'process/db.php';


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
              else
              {
                echo 'not inserted';

              }
         }
         catch(PDOException $e)
         {
            echo $e->getMessage();
         }
      


        }

?>