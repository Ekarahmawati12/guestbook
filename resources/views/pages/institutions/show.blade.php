@extends('layouts.app')

@section('content')
    <div class= "py-4">
        <h3 class="fw-bold mb-2 pb-2 border-bottom">Detail Institution</h3>

        <table class="table table-striped table-bordered">
            <tr>
                <td>ID</td>
                <td><strong>#{{ $institutions->id}}</strong></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>{{ $institutions->name }}</td>
           <tr>
                <td>Created At</td>
                <td>{{ Carbon\Carbon::parse($institutions->created_at)->isoFormat('DD MMMM Y HH:mm')}}</td>
           </tr>
           <tr>
                <td>Updated At</td>
                <td>{{ Carbon\Carbon::parse($institutions->updated_at)->isoFormat('DD MMMM Y HH:mm')}}</td>
           </tr>
        </table>
        <a href="{{ route('admin.institution.index')}}"
        class="btn btn-sm btn-secondary mb-2">
        Kembali
        </a>
    </div>
@endsection
