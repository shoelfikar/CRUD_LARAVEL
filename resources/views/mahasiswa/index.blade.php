@extends('layouts/main')

@section('title', 'Daftar Karyawan')

@section('container')
<div class="container">
    <div class="row">
        <div class="col-md-10">
            <h1 class="mt-3">Daftar Karyawan</h1>

            <table class="table">
                <thead class="thead-dark">
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nama Karyawan</th>
                    <th scope="col">Email</th>
                    <th scope="col">Jabatan</th>
                    <th scope="col">Phone</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employment as $kary)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$kary->name}}</td>
                        <td>{{$kary->email}}</td>
                        <td>{{$kary->jabatan}}</td>
                        <td>{{$kary->hp}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection