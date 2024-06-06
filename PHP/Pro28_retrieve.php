<?php
    session_start();
?>

<!DOCTYPE html>
<html>
    <body>
        <?php
        echo "Favorite color : ".$_SESSION['favcolor']."<br>";
        echo "Favorite animal : ".$_SESSION['favanimal']."<br>";
        ?>
    </body>
</html>