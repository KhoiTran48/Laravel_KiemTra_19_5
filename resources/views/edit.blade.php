<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="" method="POST">
		{{ csrf_field() }}
		<table border="1px" align="center">
			<tr>
				<td>Họ Tên</td>
				<td><input type="text" name='txtHoTen' value="{{ old('txtHoTen', $data['hoten'])}}"></td>
			</tr>
			<tr>
				<td>Toán</td>
				<td><input type="text" name='txtToan' value="{{ old('txtToan', $data['toan'])}}"></td>
			</tr>
			<tr>
				<td>Lý</td>
				<td><input type="text" name='txtLy' value="{{ old('txtly', $data['ly'])}}"></td>
			</tr>
			<tr>
				<td colspan="2"><input type="submit" name='txtSua' value="Sửa"></td>
			</tr>
		</table>
	</form>
</body>
</html>