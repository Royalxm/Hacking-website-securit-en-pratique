<?php

$login = 'admin';
$password = 'r00t';

?>

<html>
<head>
	<title>Tuto2</title>
</head>
<body>
	<?php
	
	if (isset($_POST['log']))
	{
		if ($_POST['login'] == $login && $_POST['password'] == $password)
		{
			echo 'Connection accepter';
		}
		else
		{
			echo 'Error';
		}
	}
	else
	{
	echo "
		<form method=\"POST\">
			<input type=\"text\" name=\"login\" /> Login <br />
			<input type=\"password\" name=\"password\" /> Password <br />
			<input type=\"submit\" name=\"log\" value=\"Login\" />
		</form>
	";
	}
?>	
</body>
</html>
