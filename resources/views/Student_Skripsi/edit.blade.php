@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @if (session('status'))
                <div class="alert alert-success">{{ session('status') }} </div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="pt-1">Edit Mahasiswa Skripsi
                        <a href="{{url('students')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('students'.$students->id.'/edit')}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$students->name}}" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Nim</label>
                            <input type="number" name="nim_mahasiswa" value="{{$students->nim_mahasiswa}}" class="form-control">
                             @error('nim_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Angkatan </label>
                            <input type="text" name="angkatan_mahasiswa" value="{{$students->angkatan_mahasiswa}}" class="form-control">
                             @error('angkatan_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Judul Skripsi</label>
                            <textarea type="text" name="judul_mahasiswa" value="{{$students->judul_mahasiswa}}" class="form-control"></textarea>
                             @error('judul_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Prodi</label>
                            <input type="text" name="prodi_mahasiswa" value="{{$students->prodi_mahasiswa}}" class="form-control">
                             @error('prodi_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Pembimbing </label>
                            <input type="text" name="pembimbing_mahasiswa" value="{{$students->pembimbing_mahasiswa}}" class="form-control">
                             @error('pembimbing_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection