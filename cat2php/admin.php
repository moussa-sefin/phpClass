<?php
require 'process/db.php';
$sql = 'SELECT student.std_id, student.fname, student.lname, student.gender, student.Reg_num, student.level, student.dpt, hostel.block_name, hostel.room_number FROM student, hostel WHERE student.std_id= hostel.std_id ';
$statement = $connection->prepare($sql);
$statement->execute();
$people = $statement->fetchAll(PDO::FETCH_OBJ);
 ?>
<?php require 'header.php'; ?>
<div class="container">
  <div class="card mt-5">
    <div class="card-header">
      <h2>All people</h2>
    </div>
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <th>FirstName</th>
          <th>LastName</th>
          <th>Gender</th>
          <th>RegNo</th>
          <th>Level</th>
          <th>Department</th>
          <th>BlockName</th>
          <th>RoomNumber</th>
          <th>Action</th>
        </tr>
        <?php foreach($people as $person): ?>
          <tr>
            <td><?= $person->std_id; ?></td>
            <td><?= $person->fname; ?></td>
            <td><?= $person->lname; ?></td>
            <td><?= $person->gender; ?></td>
            <td><?= $person->Reg_num; ?></td>
            <td><?= $person->level; ?></td>
            <td><?= $person->dpt; ?></td>
            <td><?= $person->block_name; ?></td>
            <td><?= $person->room_number; ?></td>
          
            <td>
              <a href="process/updateprocessing.php?id=<?= $person->std_id ?>" class="btn btn-info">Edit</a>
              <a onclick="return confirm('Are you sure you want to delete this entry?')" href="process/deleteprocessing.php?id=<?= $person->std_id ?>" class='btn btn-danger'>Delete</a>
            </td>
          </tr>
        <?php endforeach; ?>
      </table>
    </div>
  </div>
</div>



<?php require 'footer.php'; ?>


