@extends('layouts.app')
@section('content')

<div class="container">
	<a href="{{url('barang/add')}}">Tambah</a>
	<table style="width: 100%">
		<thead>
			<th>ID Gudang</th>
			<th>Nama</th>
			<th>Berat</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach($barang as $row)
				<tr>
					<td>{{$row->gudang_id}}</td>
					<td>{{$row->nama}}</td>
					<td>{{$row->berat}}</td>
					<td><a href="{{url('barang/edit'.$row->id)}}">Edit</a>
					<td><a onclick="return confirm('Apakah anda yakin ingin menghapus barang{{$row->nama}}?')" href="{{url('barang/delete/'.$row->id)}}">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
		
	</table>
</div>
@endsection