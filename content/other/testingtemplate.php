<!DOCTYPE html>
<html>
    <body>
        <?php
        $root = false;
        $nextlink= "/";
        $content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . /*
        DO NOT GET RID OF DOUBLE QUOTES CHANGE THIS TO PREVIEW >>>>>>>>> */ "/content/html/1/html_fundamentals.html" /* <<<<<<<<<<<<<<<<<< DO NOT GET RID OF DOUBLE QUOTES CHANGE THIS TO PREVIEW
        */);
        include ($_SERVER['DOCUMENT_ROOT'] . "/php/template.php");
        ?>
    </body>
</html>