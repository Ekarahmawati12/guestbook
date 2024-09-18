@extends('layouts.app')

@section('content')
<div class="page-heading">
    <div class="page-title-mb-3">
        <h3>
            <span class="bi bi-people"></span>
            Detail Guests
        </h3>
    </div>
        <table class="table table-striped table-bordered">
            <tr>
                <td>ID</td>
                <td><strong>#{{ $guests->id}}</strong></td>
            </tr>
            <tr>
                <td>Guest Name</td>
                <td>{{ $guests->fullname }}</td>
           <tr>
            <tr>
                <td>From</td>
                <td>{{ $guests->from }}</td>
           <tr>
            <tr>
                <td>Phone Number</td>
                <td>{{ $guests->phonenumber }}</td>
           <tr>
            <tr>
                <td>Email</td>
                <td>{{ $guests->email }}</td>
           <tr>
            <tr>
                <td>Note</td>
                <td>{{ $guests->note }}</td>
           <tr>
                <td>Created At</td>
                <td>{{ Carbon\Carbon::parse($guests->created_at)->isoFormat('DD MMMM Y HH:mm')}}</td>
           </tr>
           <tr>
                <td>Updated At</td>
                <td>{{ Carbon\Carbon::parse($guests->updated_at)->isoFormat('DD MMMM Y HH:mm')}}</td>
           </tr>
        </table>
        <a href="{{ route('admin.guests.index')}}"class="btn btn-sm btn-secondary mb-2">
        Kembali
        </a>
    </div>
@endsection
