<!DOCTYPE html>
<html>
    <head>
        <title>bunnyCode</title>
        <!-- favicon -->
        <link href="../../../img/favicon.ico" type="image/ico" rel="icon">
        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="../../../css/shared.css">
        <link rel="stylesheet" type="text/css" href="../../../css/content.css">
        <!-- Mobile Response CSS -->
        <link rel="stylesheet" type="text/css" href="../../../css/shared-mobile.css">
        <link rel="stylesheet" type="text/css" href="../../../css/content-mobile.css">
    </head>
    <body>
        <div id="nav">
            <div id="logo">
                <a href="/">
                    <span>bunnyCode</span>
                </a>
            </div>
            <div id="nav-text-container">
                <ul>
                    <li class="bhover">
                        <a>HTML</a>
                        <ul class="dropdown">
                            <a href="/content/html/1/html_fundamentals.html"><li>HTML Fundamentals</li></a>
                            <a href="/content/html/2/html_content.html"><li>HTML Content</li></a>
                            <a href="/content/html/3/css_fundamentals.html"><li>CSS Fundamentals</li></a>
                            <a href="/content/html/4/styling_css.html"><li>Styling CSS</li></a>
                            <a href="/content/html/5/organizing_html.html"><li>Organizing HTML</li></a>
                        </ul>
                    </li><!--
                    --><li class="bhover">
                        <a>CSS</a>
                        <ul class="dropdown">
                            <a href="/content/css/6/box.html"><li>The CSS Box Model</li></a>
                            <a href="/content/css/7/position.html"><li>Images</li></a>
                            <a href="/content/css/8/images.html"><li>Tables</li></a>
                        </ul>
                    </li>
                </ul> <!-- end first ul -->
            </div> <!-- end nav-text-container -->
        </div> <!-- end nav -->
        <div id="content">
            <?php
            print $content;
            ?>
        </div>
    </body>
</html>
<!--  -->
<script src="../../../js/content.js"></script>


<!-- 

if ../../../css/shared.css exists, then content

otherwise, root

-->