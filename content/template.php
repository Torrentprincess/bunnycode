<!DOCTYPE html>
<html>
    <head>
        <title>bunnyCode</title>
        <!-- favicon -->
        <link href="../../../img/favicon.ico" type="image/ico" rel="icon">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="/css/shared.css">
        <link rel="stylesheet" type="text/css" href="/css/content.css">
        <link rel="stylesheet" type="text/css" href="/fonts/font.css">
        <link href="https://fonts.googleapis.com/css?family=Passion+One|Roboto" rel="stylesheet">
        <!-- Mobile Response CSS -->
        <link rel="stylesheet" type="text/css" href="/css/shared-mobile.css">
        <link rel="stylesheet" type="text/css" href="/css/content-mobile.css">
    </head>
    <body>
        <?php
        include("nav.php");
        ?>
        <div id="content">
            <?php
            print $content;
            ?>
            <div class="button-container">
                <a href="<?php print $prevlink; ?>" id="prevbutton" class="button">Previous</a>
                <a href="<?php print $nextlink; ?>" id="nextbutton" class="button">Next</a>
            </div>
        </div>
        <footer>
        </footer>
    </body>
</html>
<!--  -->
<script>
//PREVIOUS BUTTON:
    prevButton = document.getElementById("prevbutton");
    if (prevButton.href == "https://bunnycode-ellieya.c9users.io/content/0.php") {
    prevButton.style.display = "none";
    }

//NEXT BUTTON
    nextButton = document.getElementById("nextbutton");
    if (nextButton.href == "https://bunnycode-ellieya.c9users.io/content/10.php") {
    nextButton.style.display = "none";
    }
</script>