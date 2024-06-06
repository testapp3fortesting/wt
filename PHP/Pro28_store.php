<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<body>
    <?php
        $_SESSION['favcolor'] = "red";
        $_SESSION['favanimal'] = "cat";
        echo "session variables are set";
     ?>
    
</body>
</html>