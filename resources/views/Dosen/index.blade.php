@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="pt-1">Dosen Penguji 
                        <a href="{{url('dosen/create')}}" class="btn btn-primary float-end">Add Dosen Penguji </a>
                    </h4>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">NID</th>
                                <th scope="col">Penguji </th>
                                <th scope="col">Mahasiswa Skripsi </th>
                                <th scope="col">Judul Skripsi</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($dosens as $dosen)
                                <tr>
                                    <th scope="row">{{$dosen->id}}</th>
                                    <td>{{$dosen->name}}</td>
                                    <td>{{$dosen->nid}}</td>
                                    <td>{{$dosen->dosen_penguji}}</td>
                                    <td>{{$dosen->mahasiswa_skripsi}}</td>
                                    <td>{{$dosen->judul_skripsi}}</td>
                                    <td class="d-flex gap-1 justify-center align-items-center">
                                        <a href="{{url('dosen/'.$dosen->id.'/edit')}}" class="btn btn-info" >Edit</a>
                                        <a href="{{url('dosen/'.$dosen->id.'/delete')}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                        {{-- {!! $students->links() !!} --}}
            </div>
        </div>
    </div>
</div>



@endsection