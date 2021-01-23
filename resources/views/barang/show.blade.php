@extends('barang.layout')
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Tampilkan barang </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('barang.index') }}"> Kembali</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>ID:</strong>
                {{ $barang->id }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $barang->nama }}
            </div>
        </div>
    </div>
@endsection