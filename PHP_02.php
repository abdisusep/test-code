<?php
	$message = '';
	$submit = isset($_POST['submit']);
	if ($submit) {
		$username = $_POST['username'];
		$password = $_POST['password'];

		if ($username!='' && $password!='') {
			$new_password = '';
			for ($i = strlen($password) - 1; $i >= 0; $i--) {
			    $new_password .= $password[$i];
			}

			if ($username == $new_password) {
				$message = '<span style="color:green;">Login berhasil!</span>';
			}else{
				$message = '<span style="color:red;">Login gagal!</span>';
			}
		}else{
			$message = '<span style="color:red;">Inputan wajib diisi!</span>';
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP_02</title>
</head>
<body>
	<?php echo $message; ?>
	<form method="POST">
		<table cellpadding="5">
			<tr>
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>Password</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Login</button></td>
			</tr>
		</table>
	</form>
</body>
</html>