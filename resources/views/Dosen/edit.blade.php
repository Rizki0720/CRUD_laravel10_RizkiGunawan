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
                    <h4 class="pt-1">Edit Dosen Penguji 
                        <a href="{{url('dosen')}}" class="btn btn-primary float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('dosen/'.$dosens->id.'/edit')}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="">Name</label>
                            <input type="text" name="name" value="{{$dosens->name}}" class="form-control">
                            @error('name')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>NID</label>
                            <input type="number" name="nid" value="{{$dosens->nid}}" class="form-control">
                             @error('nid')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Penguji</label>
                            <input type="text" name="dosen_penguji" value="{{$dosens->dosen_penguji}}" class="form-control">
                             @error('dosen_penguji')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Mahasiswa skripsi</label>
                            <input type="text" name="mahasiswa_skripsi" value="{{$dosens->mahasiswa_skripsi}}" class="form-control">
                             @error('mahasiswa_skripsi')
                                <span class="text-danger">{{ $message }} </span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label>Judul Skripsi</label>
                            <textarea type="text" name="judul_skripsi" value="{{$dosens->judul_skripsi}}" class="form-control"></textarea>
                             @error('judul_skripsi')
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