<?php

/**
 * @author GallerySoft.info
 * @copyright 2019
 */
 
    $i = 2;
    echo "*<br>";
    while ($i <= 10){
        for ($j = 1; $j <= $i; $j++) echo "* ";
        echo "<br>";
        $i++;
    }
    echo "--------------------------------------------<br>";

    $m = 10;
    $t = $m;
    $s = 1;
    $d = 0;
    while ($m != $s-1){
        for ($n = 1; $n < $t; $n++){
            echo " . ";
            $d ++;
        }
        for ($k = 1; $k <=$s; $k++){
            echo '.*.';
        }
        for ($l = 1; $l <= $d; $l++){
            echo " . ";
        }
        $d = 0;
        $t --;
        echo "<br>";
        $s ++;
    }
?>