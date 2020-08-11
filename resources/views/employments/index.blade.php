@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1 class="mt-3">Daftar Karyawan</h1>
            <a href="/employments/create" class="btn btn-primary mb-3">Add Employment</a>
            @if(session('status'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{session('status')}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
            <ul class="list-group">
                @foreach ($employment as $emp)
                <li class="list-group-item d-flex justify-content-between align-items-center">
                    {{$emp->name}}
                    <a href="/employments/{{$emp->id}}" class="badge bagde-info badge-pill">Detail</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
@endsection