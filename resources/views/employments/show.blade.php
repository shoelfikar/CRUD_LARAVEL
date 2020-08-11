@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1 class="mt-3">Detail Karyawan</h1>
            @isset($status)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{$status}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endisset
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title d-flex justify-content-center">{{$employment->name}}</h5>
                    <h6 class="card-subtitle mb-2 text-muted d-flex justify-content-center">{{$employment->jabatan}}</h6>
                    <p class="card-text d-flex justify-content-center">{{$employment->email}}</p>
                    <p class="card-text d-flex justify-content-center">{{$employment->hp}}</p>
                    
                    <a href="/employments/{{$employment->id}}/update" class="btn btn-primary">Edit</a>
                    <form action="/employments/{{$employment->id}}" method="post" class="d-inline">
                        @method('delete')
                        @csrf
                        <button type="submit" class="btn btn-danger col-md-12 my-2">Delete</button>
                    </form>
                    <a href="/employments" class="btn btn-outline-primary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection