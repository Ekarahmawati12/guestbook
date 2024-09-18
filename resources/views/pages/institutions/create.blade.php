@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title-mb-3">
        <h3>
            <span class="bi bi-building"></span>
           Create New - Institutions
        </h3>
    </div>

    <section class="section">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('admin.institution.store') }}" method="POST">
                    @csrf
                
                    <div class="form-group mb-2">
                        <label for="name" class="form-label">Nama</label>
                        <textarea name="name" id="name" class="form-control" required></textarea>
                    </div>
                
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.institution.index') }}" class="btn btn-secondary">Batal</a>
                    <a href="{{ route('admin.institution.index') }}" class="btn btn-secondary">Kembali</a>
                </form>
                
    </section>
@endsection