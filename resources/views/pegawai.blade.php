<!DOCTYPE html>
<html>
<head>
	<title>Display Data</title>
</head>
<body>
	<a href="{{ route('addData') }}">Tambah Data</a>
	<br>
	<table border="1">
		<thead>
			<tr>
				<td>Nama Lengkap</td>
				<td>Tempat Lahir</td>
				<td>Tanggal Lahir</td>
				<td>Email</td>
				<td>Phone</td>
				<td>Pekerjaan</td>
				<td>Gaji</td>
				<td>Action</td>
			</tr>
		</thead>		
		<tbody>
			@foreach($pegawai as $key => $value)
			<tr>
				<td>{{ $value->nama_lengkap }}</td>
				<td>{{ $value->tempat_lahir }}</td>
				<td>{{ $value->tanggal_lahir }}</td>
				<td>{{ $value->email }}</td>
				<td>{{ $value->phone }}</td>
				<td>{{ $value->pekerjaan }}</td>
				<td>{{ $value->gaji }}</td>
				<td><a href="{{ route('editData').'?id='.$value->id }}">Edit</a> | <a href="{{ route('deleteData').'?id='.$value->id }}">Delete</a></td>
			</tr>
			@endforeach
		</tbody>
	</table>
</body>
</html>