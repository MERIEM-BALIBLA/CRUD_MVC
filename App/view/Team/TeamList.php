<?php  
    $title = "Squad list";
    ob_start();
?>
<a href="create.php" class="btn btn-primary">Ajouter</a>
      <table class="table table-striped"> 
        <thead>
          <tr>
            <th>Name</th>
            <th>About</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach($squads as $squad): ?>
            <tr>
              <td><?php echo $squad -> name?></td>
              <td><?= $squad -> contain?></td>
              <td>
                <a href="delete.php?id=<?= $squad -> id?>" class="btn btn-danger btn-sm">Delete</a>
                <a href="edit.php?id=<?= $squad -> id?>" class="btn btn-success btn-sm">Edit</a>
              </td>
            </tr>
          <?php endforeach;?>
        </tbody>
      </table>
<?php 
    $content = ob_get_clean();
    include_once 'Team.php';?>