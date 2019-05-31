<?php

/**
 * @author GallerySoft.info
 * @copyright 2019
 */
    $year = 3;
    $deposits = 20000000;
    $interes_rate = 0.6/100;
    $total = $deposits;
    for ($i = 1; $i <= $year * 12;$i++){
        $total = $total + $total * $interes_rate;
    }
    echo "Sau 3 năm, bạn A nhận được cả gốc lẫn lãi số tiền là: ".number_format($total,0,',','.')." VNĐ";
?>