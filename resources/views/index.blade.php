<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="">
</head>
<body>
	<table border="1px" width="650px" align="center">
		<tr>
			<td>STT</td>
			<td>Họ Tên</td>
			<td>Toán</td>
			<td>Lý</td>
			<td colspan="2">Hành Động</td>
		</tr>
		@foreach($abc as $item)
			<tr> 
				<td>{{ $loop->iteration }}</td>
				<td>{{$item['hoten']}}</td>
				<td>{{$item['toan']}}</td>
				<td>{{$item['ly']}}</td>
				<td><a href="{{ route('destroy', array('id'=> $item['id'])) }}">Xóa</a></td>
				<td><a href="{{ route('edit', array('id'=> $item['id'])) }}">Sửa</a></td>
			</tr>
		@endforeach
	</table>
</body>
</html>