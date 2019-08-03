<link rel="stylesheet" href="css/style.css">
<?php

/**
 * @author GallerySoft.info
 * @copyright 2019
 */

    for ($i = 1; $i <= 8; $i++) {
        for ($j = 1; $j <=8; $j++){
            if (($i + $j) % 2 == 0){
                echo "<div class = 'red'></div>";
            }
            else 
                echo "<div class = 'black'></div>";
        }
       echo "<br>";
    }
?>