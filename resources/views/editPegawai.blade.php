<!DOCTYPE html>
<html>
<head>
	<title>Edit Pegawai</title>
</head>
<style type="text/css">
	input, button{
		margin: 5px;
	}
</style>
<body>
	<form method="post" action="{{ route('editDataProcess') }}">
		{{ csrf_field() }}
		<input type="hidden" name="id" value="{{ $pegawai->id }}">
		<label>Nama Lengkap :</label><br>
		<input type="text" name="nama_lengkap" required="true" value="{{ $pegawai->nama_lengkap }}"><br>
		<label>Tempat Lahir :</label><br>
		<input type="text" name="tempat_lahir" required="true" value="{{ $pegawai->tempat_lahir }}"><br>
		<label>Tanggal Lahir (yyyy-mm-dd) :</label><br>
		<input type="text" name="tanggal_lahir" required="true" value="{{ $pegawai->tanggal_lahir }}"><br>
		<label>Email :</label><br>
		<input type="email" name="email" required="true" value="{{ $pegawai->email }}"><br>
		<label>Phone :</label><br>
		<input type="text" name="phone" required="true" value="{{ $pegawai->phone }}"><br>
		<label>Pekerjaan :</label><br>
		<input type="text" name="pekerjaan" required="true" value="{{ $pegawai->pekerjaan }}"><br>
		<label>Gaji :</label><br>
		<input type="text" name="gaji" required="true" value="{{ $pegawai->gaji }}"><br>
		<button type="submit">Edit Data</button>
	</form>
</body>
</html>