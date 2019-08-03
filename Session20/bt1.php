<?php

/**
 * @author GallerySoft.info
 * @copyright 2019
 */
    echo "Các số chia hết cho 3 trong khoảng (200 - 250)<br>";
    for ($i = 201; $i < 250; $i++){
        if ($i % 3 == 0) 
            echo $i.'<br>';    
    }
?>