<!DOCTYPE html>
<html>
<head>
	<title>Tính tổng 2 số</title>
    <style>
        .err{
            color: red;
        }
    </style>
</head>
<body>
    <?php 
    $erra = $errb = '';
        if (isset($_POST['submit'])){
            if ($_POST['a']==''){
                $erra = 'Hãy nhập số a';
            } else {
                $erra = '';
            }
            if ($_POST['b']==''){
                $errb = 'Hãy nhập số b';
            } else {
                $errb = '';
            }
            if ($errb == '' and $erra == ''){
                echo $_POST['a']." + ".$_POST['b']." = ".($_POST['a']+$_POST['b']);
            }
        }
    ?>
	<h1>Tính tổng</h1>
	<form method="post" action="#">
		<p>Số a <input type="number" name="a" /></p>
        <p class="err"><?php echo $erra?></p>
		<p>Số b <input type="number" name="b"/></p>
        <p class="err"><?php echo $errb?></p>
		<input type='submit' name="submit"/>
	</form>
</body>
</html>

