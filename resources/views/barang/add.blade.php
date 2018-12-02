@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="{{url('barang/save')}}">
		{{csrf_field()}}
		<table style="width: 100%;">
			<div class="form-group">
				<label for="">Gudang</label>
				<select name="gudang_id" id="" class="form-control">
					@foreach ($gudang as $gudang)
						<option value="{{$gudang->id}}"> {{ $gudang->id}}</option>
					@endforeach
				</select>
				
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="nama" placeholder="Nama Barang">
			</div>
			<div class="form-group">
				<label for="">Berat</label>
				<input type="text" class="form-control" name="berat" placeholder="Berat Barang">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Save">
			</div>
		</table>
	</form>
</div>
@endsection