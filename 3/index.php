<html>
<head>
	<title>Test page</title>
</head>
<body>

<?php

if (isset($_POST['edit']))
{
	echo 'Id user : #'.$_POST['id'].' new mots de passe '.$_POST['pass'].'$';
}
else
{
?>
	password: <br />
	<form method="POST">
		<input type="hidden" name="id" value="1234" />
		<input type="text" name="pass">
		<input type="submit" name="edit" value="Confirm" />
	</form>

<?php
}
?>

</body>
</html>