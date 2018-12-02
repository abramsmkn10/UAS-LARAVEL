@extends('layouts.app')

@section('content')
<div class="container">
	<form method="POST" action="{{url('gudang/update')}}">
		{{csrf_field()}}
		<table style="width: 100%;">
			<div class="form-group">
				<label for="">Alamat</label>
				<textarea name="alamat" rows="5" class="form-control" value="{{$gudang->alamat}}"></textarea>
			</div>
			<div class="form-group">
				<label for="">Kapasitas</label>
				<input type="text" name="kapasitas" rows="5" class="form-control" value="{{$gudang->kapasitas}}">
			</div>
			<div class="form-group">
				<input type="submit" class="btn btn-primary" value="Perbarui">
			</div>
		</table>
	</form>
</div>
@endsection