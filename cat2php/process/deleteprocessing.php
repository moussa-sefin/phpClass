<?php
require 'db.php';
$id = $_GET['id'];
$sql1 = 'DELETE FROM student WHERE std_id=:id';
$sql2 = 'DELETE FROM hostel WHERE std_id=:id';
$statement2 = $connection->prepare($sql2);
$statement1 = $connection->prepare($sql1);

if ($statement2->execute([':id' => $id]) && $statement1->execute([':id' => $id])) {
  header("Location: ../admin.php");
}

?>