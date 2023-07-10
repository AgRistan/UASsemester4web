@extends('layouts.master')
@section('content')

@if(count($errors)>0)
    @foreach($errors->all() as $error)
    <div class="alert alert-danger" role="alert">
      {{ $error }}
    </div>
    @endforeach
  @endif

@if(Session::has('success'))
<div class="alert alert-success" role="alert">
    {{ Session('success') }}
</div>

@endif
<div class="col-lg-12 order-lg-1">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Laporan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('laporan.update' , $laporan->id ) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama" value="{{ $laporan->nama }}">
                </div>
                <div class="form-group">
                    <label>Anggaran</label>
                    <input type="number" class="form-control" name="C1" value="{{ $laporan->C1 }}">
                </div>
                <div class="form-group">
                    <label>Sumber Daya</label>
                    <input type="number" class="form-control" name="C2" value="{{ $laporan->C2 }}">
                </div>
                <div class="form-group">
                    <label>Iklim</label>
                    <input type="number" class="form-control" name="C3" value="{{ $laporan->C3 }}">
                </div>
                <div class="form-group">
                    <label>Banyak Aduan</label>
                    <input type="number" class="form-control" name="C4" value="{{ $laporan->C4 }}">
                 </div>
            <div class="form-group">
                <button class="btn btn-primary btn-block">Update Produk</button>
            </div>
            </form>
        </div>
    </div>
</div>

@endsection