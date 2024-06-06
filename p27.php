<?php
        $target="c:/";
        if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'],$target.$_FILES['fileToUpload']['name']))
        {
            echo "File uploaded successfully!";
        }
        else
        {
            echo "Sorry, File not uploaded, please try again!";
        }
    ?>