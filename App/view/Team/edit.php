<?php 

    $title = "Update your team info";
    ob_start();
?>
<form method="POST" action="edit.php">
    <input type="text" class="d-none" name="id">
    <div class="form-group mb-2">
        <input name ="name" class="form-control" placeholder="Squad name" value = <?php echo $squad -> name?>>
    </div>
    <div class="form-group">
        <input name = "description" class="form-control" placeholder="Short description" value = <?= $squad->contain?>>
    </div>
    
    <button type="submit" value="edit" name="edit" class="btn btn-success">Save</button>
</form>
<?php 
    $content = ob_get_clean();
    include_once 'Team.php';?>