@extends('layouts.master')

@section('content')
<div class="container">
    <form action="{{route ('Profile') }}" id="editprofil" enctype="multipart/form-data" method="post">
    @csrf
    <input type="hidden" name="id_user" value="{{$user->id}}">
    <h4 class="mt-3">Profil Toko</h4>
    <div>
    @if ($errors->any())
        <div class="text-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    </div>

    <div class="d-flex justify-content-center col-lg-12 col-12 ">
        <img src="{{URL('/images/'. $user->photo_profile)}}"  class="rounded-circle " id="image-cover" style="width: 120px; object-fit:cover; object-position:center" alt="ost">
    </div>

    <!-- Foto Profil -->
    <div class="modal-body mt-3">
        <div class="mb-1">
        <label for="formFileMultiple" class="form-label">Foto Profil</label>
        <input name="photo_profile" class="form-control" type="file" id="formFileMultiple">
        </div>
    </div>

    <div class="modal-body mt-3">
        <div class="mb-1">
        <label for="formFileMultiple" class="form-label">Nama Lengkap</label>
        <input type="text" name="nama_lengkap" class="form-control" id="exampleFormControlInput1" value="{{ Auth::user()->nama_lengkap }}">
        </div>
    </div>

    <!-- Alamat Toko -->
    <div class="modal-body mt-3">
        <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Alamat Anda</label>
        <input type="text" name="alamat_toko" class="form-control" id="exampleFormControlInput1" placeholder=" " value="{{ Auth::user()->alamat_toko }}">
        </div>
    </div>
    <!-- Lokasi -->
    
    

    <div class="col">
        <div class="col-12 mt-2 mb-2 text-center">
        <!-- Button trigger modal batal -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropBatal">
        Batal
        </button>
        <!-- Modal batal-->
        <div class="modal fade" id="staticBackdropBatal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Batal</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Apakah kamu yakin ingin kembali?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="button" onclick="location.href='{{route ('SellerPage')}}'" class="btn btn-success">Ya</button>
                </div>
                </div>
            </div>
        </div>

        <!-- Button trigger modal Simpan -->
        <button type="button"  class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropSimpan">
        Simpan
        </button>
        <!-- Modal simpan-->
        <div class="modal fade" id="staticBackdropSimpan" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Simpan</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Simpan Perubahan?</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <button type="submit" value="Upload" class="btn btn-success">Ya</button>
                </div>
                </div>
            </div>
        </div>
    </div>
    </form>
</div>
@endsection