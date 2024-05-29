<?php
	$message = '';
	$submit = isset($_POST['submit']);
	if ($submit) {
		$nama   = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$telp   = $_POST['telp'];
		$jk     = $_POST['jk'];

		if ($nama!='' && $alamat!='' && $telp!='' && $jk!='') {
			if (preg_match('/\d/', $nama)) {
				$message .= '<span style="color:red;">Nama hanya boleh berisi huruf!</span><br>';
			}
			
			if (!is_numeric($telp)) {
				$message .= '<span style="color:red;">Nomor telepon hanya boleh berisi angka!</span><br>';
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
	<title>PHP_01</title>
</head>
<body>
	<?php echo $message; ?>
	<form method="POST">
		<table cellpadding="5">
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><input type="text" name="alamat"></td>
			</tr>
			<tr>
				<td>Nomor Telepon</td>
				<td><input type="text" name="telp"></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<select name="jk">
						<option value="">--Pilih--</option>
						<option value="L">Laki-laki</option>
						<option value="P">Perempuan</option>
					</select>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><button type="submit" name="submit">Submit</button></td>
			</tr>
		</table>
	</form>
</body>
</html>