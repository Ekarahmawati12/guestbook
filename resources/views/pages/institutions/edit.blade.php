@extends('layouts.app')

@section('content')
<div class="py-4">
    <h3 class="fw-bold mb-2 pb-2 border-bottom">Edit Institution</h3>
    <form action="{{route('admin.institution.update' ,$institutions->id)}}" method="POST">
        @csrf
        @method('PUT')
        
        <div class="form-group mb-2">
            <label for="name" class="form-label">Nama <span class="text-denger">*</label>
            <input type="text" name="name" id="name" value="{{$institutions->name}}"class="form-control @error('name') is-invalid @enderror"/>
        </div>

        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('admin.institution.index')}}" class="btn btn-secondary">Batal</a>
        
    </form>
</div>

@endsection