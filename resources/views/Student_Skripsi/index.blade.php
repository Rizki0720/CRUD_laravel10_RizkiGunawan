@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="pt-1">Mahasiswa Skripsi
                        <a href="{{url('students/create')}}" class="btn btn-primary float-end">Add Mahasiswa</a>
                    </h4>
                </div>
                <div class="card-body">
                    {{-- {{$students}} --}}
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">Nama</th>
                                <th scope="col">Nim Mahasiswa</th>
                                <th scope="col">Angkatan </th>
                                <th scope="col">Judul Skripsi </th>
                                <th scope="col">Prodi </th>
                                <th scope="col">Pembimbing  </th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($students as $student)
                                <tr>
                                    <th scope="row">{{$student->id}}</th>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->nim_mahasiswa}}</td>
                                    <td>{{$student->angkatan_mahasiswa}}</td>
                                    <td>{{$student->judul_mahasiswa}}</td>
                                    <td>{{$student->prodi_mahasiswa}}</td>
                                    <td>{{$student->pembimbing_mahasiswa}}</td>
                                    <td class="d-flex gap-1 justify-center align-items-center">
                                        <a href="{{url('students/'.$student->id.'/edit')}}" class="btn btn-info" >Edit</a>
                                        <a href="{{url('students/'.$student->id.'/delete')}}" class="btn btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                        {!! $students->links() !!}
            </div>
        </div>
    </div>
</div>

@endsection