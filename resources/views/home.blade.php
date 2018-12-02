@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                <div class="card-body">
                    <a href="{{url('gudang/all')}}"> Tambah Gudang</a>
                <a href="{{url('barang/all')}}">Tambah Barang</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
