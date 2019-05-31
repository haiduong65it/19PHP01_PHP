<?php

/**
 * @author GallerySoft.info
 * @copyright 2019
 */
    $year = 3;
    $deposits = 150000000;
    $interes_rate = 0.7/100;
    $total = $deposits;
    for ($i = 1; $i <= $year * 12;$i++){
        $total = $total + $deposits * $interes_rate;
        
        if ($i % 3 == 0) {
            $total -= (3000000 + 1000000*($i/3 -1));
        }
    }
    echo "Sau 3 năm, bạn B còn lại cả gốc lẫn lãi số tiền là: ".number_format($total,0,',','.')." VNĐ";
?>