<!DOCTYPE html>
<html>
    <body>
        <?php
//        $x = basename(__FILE__, '.php');
//        echo $x . '<br>';
//        $nextnum = $x + 1;
//        echo $nextnum;
//        
//        echo "<br><br>";
//        
//        if ($nextnum == 2) {
//            echo "It is 2.";
//        } else {
//            echo "It is not 2.";
//        }
//        
//        
        
        /*
        
        We could have JavaScript code run to make it so that, when the href is certain, make class hidden
        
        */
        
        for ($i = 1; $i <= 9; $i++) {
            $x = fopen("$i.php", "w");
            fwrite($x, '<?php $w = ' . $i . '?>' . file_get_contents("producecontenthelper.php"));
        }
        
/*
* Need to pull template
* Need to feed #.
* Need to increment fed number for the next button.
* Need a check for fed number.
* 


*/
        
        ?>
    </body>
</html>