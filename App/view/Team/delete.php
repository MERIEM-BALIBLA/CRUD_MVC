<?php   
    $title = "DELETE";
    ob_start();
    // var_dump($id);

    ?>
    
    <p>confirm your dicision please here</p>
    <a href="destroy.php?id=<?php echo $id?>" class = "btn btn-danger">Confirm</a>
    <a href="index.php" class = "btn btn-warning">Close</a>

    
    <?php
    $content = ob_get_clean();
    require_once 'Team.php';