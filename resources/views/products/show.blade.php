@extends('products.layout')
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2> Data Pegawai</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Nim:</strong>
            {{ $product->nim }}
        </div>
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Name:</strong>
            {{ $product->name }}
        </div>
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tempat_Lahir:</strong>
            {{ $product->tempat_lahir }}
        </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Tanggal_Lahir:</strong>
            {{ $product->tanggal_lahir }}
        </div>
    </div>
<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jenis_Kelamin:</strong>
            {{ $product->jenis_kelamin }}
        </div>
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Jurusan:</strong>
            {{ $product->jurusan }}
        </div>
    </div>

<div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Prodi:</strong>
            {{ $product->prodi }}
        </div>
    </div>


    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Details:</strong>
            {{ $product->detail }}
        </div>
    </div>
</div>
@endsection
