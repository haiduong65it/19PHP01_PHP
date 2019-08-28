<?php 
$max = 10000000;
$d = $i = 1;
echo 1;
echo "<br>";
while ($i < $max){
	$i++;
	$d++;
	echo $i.'  ';
	$dt = 1;
	while (($dt < $d) && ($i < $max)){
		$i++;
		echo $i.'  ';
		$dt++;
	}
	echo "<br>";
}
?>
<?php 

?>