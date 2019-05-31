<?php
	echo "<h1>Hello</h1>";
?>
<p>Hi man!</p>
<?php
    $userName = 'admin';
    echo $userName."<br>";

    /*
    * sumNumber function
    * Description: Summary 2 number
    * Created by Haiduong
    * Created 2019-05-25
    */
    function sumNumber($a, $b){
        return $a + $b;
    }
    echo sumNumber(10,20);
?>

