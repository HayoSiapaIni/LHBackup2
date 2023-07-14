@extends('layouts.masterSeller')

@section('content')
<ul class="nav nav-tabs nav-fill">
    <li class="nav-item">
        <a class="nav-link" id="title-navbar" href="{{route ('SellerPage')}}">Dashboard</a>
    </li>
    <li class="nav-item">
        <a class="nav-link active" id="title-navbar" aria-current="page" href="{{route ('produk')}}">Produk</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" id="title-navbar" href="{{route ('kategori')}}">Kategori</a>
    </li>
</ul>

<div class="container mt-3 ">
    <div class="row align-items-center">
        <div class="col">
            <h4>Tersedia 1 Produk</h4>
        </div>
        <div class="col offset-md-6 d-md-flex justify-content-md-end">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
            Tambah Produk +
            </button>
            <!-- Modal -->
            <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Tambah Produk Baru</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <!-- Foto Produk -->
                        <div class="modal-body">
                            <div class="mb-1">
                            <label for="formFileMultiple" class="form-label">Foto Produk</label>
                            <input class="form-control" type="file" id="formFileMultiple" multiple>
                            </div>
                        </div>
                        <!-- Nama Produk -->
                        <div class="modal-body">
                            <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Caisim">
                            </div>
                        </div>
                        <!-- Varietas Produk -->
                        <div class="modal-body">
                            <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Varietas Produk</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Tosakan F1">
                            </div>
                        </div>
                        <!-- Kategori Sayur-->
                        <div class="modal-body">
                            <div class="mb-1">
                            <label class="form-label">Kategori Sayur</label>
                            <select class="form-select" aria-label="Default select example">
                                <option selected>Pilih Kategori Sayur</option>
                                <option value="1">Caisim</option>
                            </select>
                            </div>
                        </div>
                        <!-- Panen Usia -->
                        <div class="modal-body">
                            <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Panen Usia</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="| Hari">
                            </div>
                        </div>
                        <!-- Bobot -->
                        <div class="modal-body">
                            <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Bobot Rata-Rata Perpack</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="| Gram">
                            </div>
                        </div>
                        <!-- Ketahanan ruangan -->
                        <div class="modal-body">
                            <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Ketahanan Sayur Pada Suhu Ruangan</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="| Hari">
                            </div>
                        </div>
                        <!-- Ketahanan chiller -->
                        <div class="modal-body">
                            <div class="mb-1">
                            <label for="exampleFormControlInput1" class="form-label">Ketahanan Sayur Pada Chiller</label>
                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="| Hari">
                            </div>
                        </div>
                        <!-- Deskripsi -->
                        <div class="modal-body">
                            <div class="mb-3">
                            <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                            </div>
                        </div>
                        <!-- Opsi Pestisida -->
                        <div class="modal-body">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Pestisida</label>
                        </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Tanpa Pestisida</label>
                        </div>
                        </div>
                        <!-- konfirmasi -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                            <button type="button" class="btn btn-success">Tambah</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container col-lg-3 col-6 py-2 d-flex justify-content-center">
    <div class="card" style="width: 13rem;">
        <img src=" " class="card-img-top" alt="Foto Sayur">
        <div class="card-body">
            <h5 class="card-title">Pakcoy</h5>
            <p class="card-text">Rp. 20.0000</p>   
            <div class="row">    
                <!-- Tombol Ubah -->
                <div class="col mt-2 mb-2">
                    <!-- Button trigger modal ubah-->
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                    Ubah
                    </button>

                    <!-- Modal ubah -->
                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-xl">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Ubah Detail Produk</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <!-- Foto Produk -->
                                <div class="modal-body">
                                    <div class="mb-1">
                                    <label for="formFileMultiple" class="form-label">Foto Produk</label>
                                    <input class="form-control" type="file" id="formFileMultiple" multiple>
                                    </div>
                                </div>
                                <!-- Nama Produk -->
                                <div class="modal-body">
                                    <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Nama Produk</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Caisim">
                                    </div>
                                </div>
                                <!-- Varietas Produk -->
                                <div class="modal-body">
                                    <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Varietas Produk</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Contoh : Tosakan F1">
                                    </div>
                                </div>
                                <!-- Kategori Sayur-->
                                <div class="modal-body">
                                    <div class="mb-1">
                                    <label class="form-label">Kategori Sayur</label>
                                    <select class="form-select" aria-label="Default select example">
                                        <option selected>Pilih Kategori Sayur</option>
                                        <option value="1">Caisim</option>
                                    </select>
                                    </div>
                                </div>
                                <!-- Panen Usia -->
                                <div class="modal-body">
                                    <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Panen Usia</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="| Hari">
                                    </div>
                                </div>
                                <!-- Bobot -->
                                <div class="modal-body">
                                    <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Bobot Rata-Rata Perpack</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="| Gram">
                                    </div>
                                </div>
                                <!-- Ketahanan ruangan -->
                                <div class="modal-body">
                                    <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Ketahanan Sayur Pada Suhu Ruangan</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="| Hari">
                                    </div>
                                </div>
                                <!-- Ketahanan chiller -->
                                <div class="modal-body">
                                    <div class="mb-1">
                                    <label for="exampleFormControlInput1" class="form-label">Ketahanan Sayur Pada Chiller</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="| Hari">
                                    </div>
                                </div>
                                <!-- Deskripsi -->
                                <div class="modal-body">
                                    <div class="mb-3">
                                    <label for="exampleFormControlTextarea1" class="form-label">Deskripsi Produk</label>
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4"></textarea>
                                    </div>
                                </div>
                                <!-- Opsi Pestisida -->
                                <div class="modal-body">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox1" value="option1">
                                    <label class="form-check-label" for="inlineCheckbox1">Pestisida</label>
                                </div>
                                    <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="inlineCheckbox2" value="option2">
                                    <label class="form-check-label" for="inlineCheckbox2">Tanpa Pestisida</label>
                                </div>
                                </div>
                                <!-- konfirmasi -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                    <button type="button" class="btn btn-success">Ubah</button>
                                </div>
                            </div>
                        </div>
                    </div> 
                </div>
                <!-- Tombol Hapus -->
                <div class="col mt-2 mb-2 text-center">
                    <!-- Button trigger modal hapus -->
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdropHapus">
                    Hapus
                    </button>

                    <!-- Modal hapus-->
                    <div class="modal fade" id="staticBackdropHapus" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Hapus Produk</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <p>Apakah kamu yakin ingin menghapus produk?</p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                                <button type="button" class="btn btn-danger">Hapus</button>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>


@endsection  