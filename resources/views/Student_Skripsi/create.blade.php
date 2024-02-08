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
                    <h4 class="pt-1">Create Mahasiswa Skripsi
                        <a href="{{url('students')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('students/create')}}" method="post">
                        @csrf 
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{old('name')}}" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Nim</label>
                            <input type="number" name="nim_mahasiswa" value="{{old('nim_mahasiswa')}}" class="form-control">
                             @error('nim_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Angkatan </label>
                            <input type="text" name="angkatan_mahasiswa" value="{{old('angkatan_mahasiswa')}}" class="form-control">
                             @error('angkatan_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Judul Skripsi</label>
                            <textarea type="text" name="judul_mahasiswa" value="{{old('judul_mahasiswa')}}" class="form-control"></textarea>
                             @error('judul_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Prodi</label>
                            <input type="text" name="prodi_mahasiswa" value="{{old('prodi_mahasiswa')}}" class="form-control">
                             @error('prodi_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Pembimbing </label>
                            <input type="text" name="pembimbing_mahasiswa" value="{{old('pembimbing_mahasiswa')}}" class="form-control">
                             @error('pembimbing_mahasiswa')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection