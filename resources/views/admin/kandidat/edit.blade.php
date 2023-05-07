@extends('layouts.admin-master')
@section('content')
        <h3 class="text-white mb-3">Management Kandidat</h3>
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="text-secondary-gradient pt-2">Ubah Data Kandidat</h5>
                </div>
                <div class="card-body">
                    <form action="{{route('management-kandidat.update', $kandidat->id)}}" name="kandidatForm"  method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="id" id="id" value="{{$kandidat->id}}">
                        <div class="form-group row">
                            <div class="col-md-6 col-12 mb-2">
                                <label for="nama_kandidat" class="mb-2">Nama Kandidat</label>
                                <input type="text" name="nama_kandidat" id="nama_kandidat" class="form-control @error('nama_kandidat') is-invalid @enderror" value="{{old('nama_kandidat') ?? $kandidat->nama_kandidat}}">
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="foto_kandidat" class="mb-2">Foto</label>
                                <input type="file" name="foto_kandidat" id="foto_kandidat" class="form-select @error('foto_kandidat') is-invalid @enderror" value="{{old('foto_kandidat')}}">
                                <input id="hidden_foto" type="hidden" name="hidden_foto" value="{{$kandidat->foto_kandidat}}">
                            </div>
                        </div>   
                        
                        <div class="form-group row">
                            <div class="col-md-6 col-12 mb-2">
                                <label for="visi" class="mb-2">Visi</label>
                                <textarea name="visi" id="visi" class="form-control @error('visi') is-invalid @enderror">{{$kandidat->visi}}</textarea>
                            </div>
                            <div class="col-md-6 col-12 mb-2">
                                <label for="misi" class="mb-2">Misi</label>
                                <textarea name="misi" id="misi" class="form-control @error('misi') is-invalid @enderror">{{$kandidat->misi}}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-6 col-12 mb-2">
                                <label for="status" class="mb-2">Role</label>
                                <select name="status" id="status" class="form-select">
                                    <option value="1" {{$kandidat->status == 1 ? 'selected' : ''}}>Aktif</option>
                                    <option value="0" {{$kandidat->status == 0 ? 'selected' : ''}}>Tidak Aktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                    <a class="btn btn-secondary"  href="{{route('management-kandidat.index')}}">Kembali</a>
                    <button type="submit" class="btn btn-primary mx-2" name="btn-save">Update</button>
                    </div>
                    </form>
                   
                </div>
            </div>
        </div>
  
@endsection