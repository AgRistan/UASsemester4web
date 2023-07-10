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
            <h6 class="m-0 font-weight-bold text-primary">Tambah Laporan</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('laporan.store') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Nama</label>
                    <input type="text" class="form-control" name="nama">
                </div>
                <div class="form-group">
                    <label>Anggaran</label>
                    <input type="number" class="form-control" name="C1">
                </div>
                <div class="form-group">
                    <label>Sumber Daya</label>
                    <input type="number" class="form-control" name="C2">
                </div>
                <div class="form-group">
                    <label>Iklim</label>
                    <input type="number" class="form-control" name="C3">
                </div>
                <div class="form-group">
                    <label>Banyak Aduan</label>
                    <input type="number" class="form-control" name="C4">
                </div>

                <div class="form-group">
                    <button class="btn btn-primary btn-block">Simpan Laporan

                    </div>
            </form>
        </div>
    </div>
</div>

@endsection