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
        <div id="nav">
            <div id="logo">
                <a href="/">
                    <span>bunnyCode \ / </span>
                </a>
            </div>
            <div id="nav-text-container">
                <ul>
                    <li class="bhover">
                        <a>HTML</a>
                        <ul class="dropdown">
                            <a href="/content/1.php"><li>Organizing HTML</li></a>
                            <a href="/content/2.php"><li>HTML Content</li></a>
                            <a href="/content/3.php"><li>CSS Fundamentals</li></a>
                            <a href="/content/4.php"><li>Styling CSS</li></a>
                            <a href="/content/5.php"><li>Organizing HTML</li></a>
                        </ul>
                    </li><!--
                    --><li class="bhover">
                        <a>CSS</a>
                        <ul class="dropdown">
                            <a href="/content/6.php"><li>The CSS Box Model</li></a>
                            <a href="/content/7.php"><li>Images</li></a>
                            <a href="/content/8.php"><li>Tables</li></a>
                        </ul>
                    </li>
                </ul> <!-- end first ul -->
            </div> <!-- end nav-text-container -->
        </div> <!-- end nav -->
        <div id="content">
            <?php
            print $content;
            ?>
            <div id="button-container">
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
    prevButton = document.getElementsByClassName("button")[0];
    if (prevButton.href == "http://localhost/content/0.php") {
    prevButton.style.display = "none";
    }

//NEXT BUTTON
    nextButton = document.getElementsByClassName("button")[1];
    if (nextButton.href == "http://localhost/content/10.php") {
    nextButton.style.display = "none";
    }
</script>