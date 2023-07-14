@extends('layouts.masterSeller')

@section('content')

<div class="container">
    <h4 class="mt-3">Profil Toko</h4>
    <!-- Foto Profil -->
    <div class="modal-body mt-3">
        <div class="mb-1">
        <label for="formFileMultiple" class="form-label">Foto Profil</label>
        <input class="form-control" type="file" id="formFileMultiple" multiple>
        </div>
    </div>
    <!-- Alamat Toko -->
    <div class="modal-body">
        <div class="mb-1">
        <label for="exampleFormControlInput1" class="form-label">Alamat Toko</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder=" ">
        </div>
    </div>
    <!-- Lokasi -->
    <div class="modal-body">
        <div class="mb-1">
        <label class="form-label">Lokasi Toko</label>
        <select class="form-select" aria-label="Default select example">
            <option selected>Pilih Lokasi Toko</option>
            <option value="1">Buah Batu</option>
        </select>
        </div>
    </div>
    <!-- Deskripsi -->
    <div class="modal-body">
        <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Toko</label>
        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
        </div>
    </div>
    <!-- Tombol batal -->
    <div class="col mt-2 mb-2 text-center">
    <!-- Button trigger modal batal -->
    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropBatal">
    batal
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
                <button type="button" class="btn btn-success">Ya</button>a
            </div>
            </div>
        </div>
    </div>
    <!-- Tombol Simpan -->
    <div class="col mt-2 mb-2 text-center">
    <!-- Button trigger modal Simpan -->
    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdropSimpan">
    Simpan
    </button>

    <!-- Modal batal-->
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
                <button type="button" class="btn btn-success">Ya</button>
            </div>
            </div>
        </div>
    </div>
</div>

@endsection