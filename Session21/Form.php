<!DOCTYPE html>
<html>
<head>
	<title>Đăng Ký</title>
    <style>
        .err{
            color: red;
        }
    </style>
</head>
<body>
    <?php 
    $errName = $errPass = '';
        if (isset($_POST['submit'])){
            if ($_POST['name']==''){
                $errName = 'Please input your name';
            } else {
                $errName = '';
            }
            if ($_POST['password']==''){
                $errPass = 'Please input your password';
            } else {
                $errPass = '';
            }
            if ($errPass == '' and $errName == ''){
                echo $_POST['name'].'<br>';
                echo $_POST['password'];
            }
        }
    ?>
	<h1>Đăng Ký</h1>
	<form method="post" action="#">
		<p>Name <input type="text" name="name" /></p>
        <p class="err"><?php echo $errName?></p>
		<p>password <input type="password" name="password"/></p>
        <p class="err"><?php echo $errPass?></p>
		<input type='submit' name="submit"/>
	</form>
</body>
</html>

