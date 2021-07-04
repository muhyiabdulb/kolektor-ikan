@extends('layouts.master', ['title' => 'Tambah Data Rayon'])

@section('content')
    <section class="section">
        <div class="section-header">
            <h1 class="text-center">Detail Data Ikan</h1>
        </div>
    </section>
    <div class="row">
        <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header d-flex">
                    <div class="card-header-action">
                        <a href={{ route('ikans.index') }} class="btn btn-danger"><i class="fa fa-arrow-left"></i>
                            Kembali</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" value="{{ $ikan->nama }}" readonly class="form-control"
                                placeholder="Nama">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="photo">Photo</label> <br>
                            @if ($ikan->photo)
                                <img style="height:300px; width:300px; object-fit:cover; object-position:center;"
                                    class="card-img-top mr-1" src="{{ $ikan->takeImage }}"> <br>
                            @endif
                            <br>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="harga">Harga</label>
                            <p>Rp {{ number_format($ikan->harga) }}</p>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="penjual">Penjual</label>
                            <input type="text" name="penjual" value="{{ $ikan->penjual }}" readonly class="form-control">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="tanggal_beli">Tanggal Beli</label>
                            <input type="date" name="tanggal_beli" value="{{ $ikan->tanggal_beli }}" readonly
                                class="form-control">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    @endsection
