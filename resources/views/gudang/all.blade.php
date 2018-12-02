@extends('layouts.app')
@section('content')

<div class="container">
	<a href="{{url('gudang/add')}}">Tambah</a>
	<table style="width: 100%">
		<thead>
			<th>Alamat</th>
			<th>Kapasitas</th>
			<th>Edit</th>
			<th>Delete</th>
		</thead>
		<tbody>
			@foreach($gudang as $row)
				<tr>
					<td>{{$row->alamat}}</td>
					<td>{{$row->kapasitas}}</td>
					<td><a href="{{url('gudang/edit/'.$row->id)}}" >Edit</a></td>
					<td><a onclick="return confirm('Apakah anda yakin ingin menghapus gudang {{$row->alamat}}?')" href="{{url('gudang/delete/'.$row->id)}}">Delete</a></td>
				</tr>
			@endforeach
		</tbody>
		
	</table>
</div>
@endsection