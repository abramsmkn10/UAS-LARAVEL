@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="{{url('barang/update')}}">
		<input type="hidden" name="id" value="{{$barang->id or ''}}">
		{{csrf_field()}}
		<table style="width: 100%">
			<div class="form-group">
				<label for="">ID Gudang</label>
				<select name="gudang_id" id="" class="form-control">
					@foreach ($gudang as $gudang)
						<option value="{{$gudang->id}}"> {{ $gudang->id}}</option>
					@endforeach
				</select>
			</div>
			<div class="form-group">
				<label for="">Nama</label>
				<input type="text" class="form-control" name="nama" value="{{$gudang->nama}}">
			</div>
			<div class="form-group">
				<label for="">Berat</label>
				<input type="text" class="form-control" name="berat" value="{{$gudang->berat}}">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Perbarui">
			</div>
		</table>
	</form>
</div>
@endsection