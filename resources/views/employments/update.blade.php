@extends('layouts.app')


@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1 class="mt-3">Update Karyawan</h1>
            <div class="card">
                <div class="card-body">
                <form method="post" action="/employments/{{$employment->id}}">
                    @method('patch')
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama Karyawan</label>
                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="nama" placeholder="Nama Karyawan" name="name" value="{{$employment->name}}">
                        @error('name')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" placeholder="Email" name="email" value="{{$employment->email}}">
                        @error('email')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="jabatan">Jabatan</label>
                        <input type="text" class="form-control @error('jabatan') is-invalid @enderror" id="jabatan" placeholder="Jabatan" name="jabatan" value="{{$employment->jabatan}}">
                        @error('jabatan')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="hp">Phone</label>
                        <input type="text" class="form-control @error('hp') is-invalid @enderror" id="hp" placeholder="Phone" name="hp" value="{{$employment->hp}}">
                        @error('hp')
                            <div id="validationServer03Feedback" class="invalid-feedback">
                                {{$message}}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Update Employment</button>
                </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection