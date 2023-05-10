@extends('layouts.admin-master')
@section('content')
<h3 class="text-white mb-3">Voting</h3>
<div class="col-lg-12">
    <div class="card">
        <div class="card-header">
            Silahkan Tentukan Pilihan Anda !
        </div>
        <form action="/voting/store" method="POST">
          @csrf  
            <div class="card-body row">
            @foreach ($kandidat as $kd)
            <div class="col-lg-3 col-md-3 col-sm-6 col-12 mb-5">
                <div class="card shadow"> 
                  @if ($kd->foto_kandidat === NULL)
                  <p class="text-center p-3 bg-dark text-white">Belum Ada Foto</p>
                  @else 
                    <img src="{{$kd->foto_kandidat}}" class="card-img-top" alt="foto kandidat">
                  @endif  
                    <div class="card-body">
                        <h5 class="card-title mb-2">{{$kd->nama_kandidat}}</h5>
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#visi-{{$kd->id}}" aria-expanded="false" aria-controls="visi-{{$kd->id}}">
                                  Visi
                                </button>
                              </h2>
                              <div id="visi-{{$kd->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{$kd->visi}}</div>
                              </div>
                            </div>
                            <div class="accordion-item">
                              <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#misi-{{$kd->id}}" aria-expanded="false" aria-controls="misi-{{$kd->id}}">
                                  Misi
                                </button>
                              </h2>
                              <div id="misi-{{$kd->id}}" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                <div class="accordion-body">{{$kd->misi}}</div>
                              </div>
                          </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input cek-suara" type="checkbox" name="votes[]" value="{{$kd->id}}" id="vote-{{$kd->id}}">
                            <label class="form-check-label" for="vote-{{$kd->id}}">
                              Beri Suara
                            </label>
                          </div>
                    </div>
                  </div>
            </div>
            @endforeach
            </div>
            <div class="p-3">
            <button type="submit" class="btn btn-primary">Kirim Pilihan</button>
            </div>
        </form>
    </div>
</div>


  @push('after-script')
      <script>
        // $('.cek-suara').click(function(){
        //     alert('KONTOL');
        // });
      </script>
  @endpush  
@endsection