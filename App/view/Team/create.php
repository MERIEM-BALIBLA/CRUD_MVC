<?php 

    $title = "Add new Team";
    
    ob_start();
?>
<form method="POST" action="insert.php">
    <input type="text" class="d-none" name="id" >
    <div class="form-group mb-2">
        <input name ="name" class="form-control" placeholder="Squad name">
    </div>
    <div class="form-group">
        <input name = "description" class="form-control" placeholder="Short description">
    </div>
    
    <button type="submit" value="add" name="add" class="btn btn-primary">Submit</button>
</form>
<?php 
    $content = ob_get_clean();
    include_once 'Team.php';?>