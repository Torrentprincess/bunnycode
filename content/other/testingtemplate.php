<!DOCTYPE html>
<html>
    <body>
        <?php
        $root = false;
        $nextlink= "/";
        $content = file_get_contents($_SERVER['DOCUMENT_ROOT'] . "/content/css/6/box.html");
        include ($_SERVER['DOCUMENT_ROOT'] . "/php/template.php");
        ?>
    </body>
</html>