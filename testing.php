<!DOCTYPE html>
<html>
    <body>
        <?php
        if (file_exists('css/shared.css')) {
            echo "Yes, file exists.";
        } else {
            echo "No. File does not exist.";
        }
        
        ?>
    </body>
</html>