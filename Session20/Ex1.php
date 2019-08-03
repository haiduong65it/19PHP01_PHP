<?php

/**
 * @author GallerySoft.info
 * @copyright 2019
 */

    $t = 1000000;
    $l1 = 10000;
    $l2 = 20000;
    $l3 = 50000;
    $d = 0;
    
    for ($a = 1; $a <= 100; $a++){  
        for ($b = 1; $b <= 50; $b++){
            for ($c = 1;$c <= 20; $c++){
                if ($a * $l1 + $b * $l2 + $c * $l3 == $t){
                    $d ++;
                    echo $a." tờ ".number_format($l1)." đồng - ".$b." tờ ".number_format($l2)." đồng - ".$c." tờ ".number_format($l3)." đồng<br>";
                    }
            }
        }
    }
    echo $d." trường hợp";

?>