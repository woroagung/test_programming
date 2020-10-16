<!DOCTYPE html>
<html>
<head>
	<title>Add Pegawai</title>
</head>
<style type="text/css">
	input, button{
		margin: 5px;
	}
</style>
<body>
	<form method="post" action="{{ route('addData') }}">
		{{ csrf_field() }}
		<label>Nama Lengkap :</label><br>
		<input type="text" name="nama_lengkap" required="true"><br>
		<label>Tempat Lahir :</label><br>
		<input type="text" name="tempat_lahir" required="true"><br>
		<label>Tanggal Lahir (yyyy-mm-dd) :</label><br>
		<input type="text" name="tanggal_lahir" required="true"><br>
		<label>Email :</label><br>
		<input type="email" name="email" required="true"><br>
		<label>Phone :</label><br>
		<input type="text" name="phone" required="true"><br>
		<label>Pekerjaan :</label><br>
		<input type="text" name="pekerjaan" required="true"><br>
		<label>Gaji :</label><br>
		<input type="text" name="gaji" required="true"><br>
		<button type="submit">Add Data</button>
	</form>
</body>
</html>