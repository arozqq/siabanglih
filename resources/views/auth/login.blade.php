@include('layouts.partials.header')
<div class="container-xxl py-5" id="kandidat">
    <div class="container py-5 px-lg-5">
        <div class="row g-5 align-items-center">
            <div class="col-lg-8">
                <h1 class="mb-2">Sistem Aplikasi Musyawarah Cabang</h1>
                <p class="mb-4">Silahkan <b>Login</b> Terlebih Dahulu</p>
                @if (session()->has('error'))
                <div class="alert alert-danger" role="alert">
                    {{ session('error') }}
                </div>
                @endif
                <div class="row g-4 mb-4">
                    <div class="col">
                        <div class="card">
                           <div class="card-body">
                            <form action="{{route('cek_login')}}" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    {{-- <label for="nik">NIK</label> --}}
                                    <label for="username" class="mb-2">Username</label>
                                    <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" id="username" placeholder="Silahkan isi dengan Username" value="{{old('username')}}">
                                    @error('username')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="mb-2">Password</label>
                                    <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" id="password" aria-describedby="helpId" placeholder="Silahkan isi dengan password">
                                    @error('password')
                                    <small class="text-danger">{{$message}}</small>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary-gradient rounded-pill py-2 px-4 d-md-block d-block mt-md-0 mt-3">Masuk</button>
                                
                            </form>
                           </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <img class="img-responsive" src="{{asset('foto/muhammadiyah-logo.png')}}" width="350">
            </div>
        </div>
    </div>
</div>
@include('layouts.partials.footer')