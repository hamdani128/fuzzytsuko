<?=$this->extend('layout/template');?>

<?=$this->section('content');?>

<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Prediksi</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Info Prediksi</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Prediksi</li>
                        </ol>
                    </nav>
                </div>
                <div class="col-lg-6 col-5 text-right">
                    <!-- <a href="#" class="btn btn-sm btn-neutral">New</a> -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Page content -->
<div class="container-fluid mt--6">
    <div class="row">
        <div class="col">
            <div class="card">
                <div class="swal" data-swal="<?=session()->get('message');?>"></div>
                <!-- Card header -->
                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-5">
                            <div class="row">
                                <h3 class="mb-0">Informasi Keterangan Penjualan</h3>
                                <div class="table-responsive table-bordered mt-2">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="budget">Deskripsi</th>
                                                <th scope="col" class="sort" data-sort="produksi">Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>Penjualan Naik</td>
                                                <td id="penj_naik"></td>
                                            </tr>
                                            <tr>
                                                <td>Penjualan Turun</td>
                                                <td id="penj_turun"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <h3 class="mb-0">Informasi Keterangan Produksi</h3>
                                <div class="table-responsive table-bordered mt-2">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="budget">Deskripsi</th>
                                                <th scope="col" class="sort" data-sort="produksi">Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>Produksi Banyak</td>
                                                <td id="prod_banyak"></td>
                                            </tr>
                                            <tr>
                                                <td>Produksi Sedikit</td>
                                                <td id="prod_sedikit"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row mt-3">
                                <h3 class="mb-0">Informasi Keterangan Persediaan</h3>
                                <div class="table-responsive table-bordered mt-2">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="budget">Deskripsi</th>
                                                <th scope="col" class="sort" data-sort="produksi">Nilai</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>Persediaan Banyak</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Persediaan Sedikit</td>
                                                <td></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 ml-3">
                            <div class="row">
                                <h3 class="mb-0">Informasi Model Fuzzy Tsukomoto</h3>
                                <div class="table-responsive table-bordered mt-2">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="budget">Deskripsi</th>
                                                <th scope="col" class="sort" data-sort="produksi">Nilai Min</th>
                                                <th scope="col" class="sort" data-sort="produksi">Nilai z1</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>R1</td>
                                                <td id="r1"></td>
                                                <td id="z1"></td>
                                            </tr>
                                            <tr>
                                                <td>R2</td>
                                                <td id="r2"></td>
                                                <td id="z2"></td>
                                            </tr>
                                            <tr>
                                                <td>R3</td>
                                                <td id="r3"></td>
                                                <td id="z3"></td>
                                            </tr>
                                            <tr>
                                                <td>R4</td>
                                                <td id="r4"></td>
                                                <td id="z4"></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="row">
                                <h3 class="mb-0">Informasi Data Maksimum dan Minimum CV.Naga Sanghie</h3>
                                <div class="table-responsive table-bordered mt-2">
                                    <table class="table align-items-center table-flush">
                                        <thead class="thead-light">
                                            <tr>
                                                <th scope="col" class="sort" data-sort="budget">Deskripsi</th>
                                                <th scope="col" class="sort" data-sort="produksi">Nilai</th>
                                                <th scope="col" class="sort" data-sort="produksi">Satuan</th>
                                            </tr>
                                        </thead>
                                        <tbody class="list">
                                            <tr>
                                                <td>Penjualan Maksimum</td>
                                                <td id="pnj_maks"><?=$penj_max;?></td>
                                                <td>ton</td>
                                            </tr>
                                            <tr>
                                                <td>Penjualan Minimum</td>
                                                <td id="pnj_min"><?= $penj_min; ?></td>
                                                <td>ton</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Produksi Maksimum</td>
                                                <td id="prd_maks"><?=$prod_max;?></td>
                                                <td>ton</td>
                                            </tr>
                                            <tr>
                                                <td>Jumlah Produksi Minimum</td>
                                                <td id="prd_min"><?=$prod_min;?></td>
                                                <td>ton</td>
                                            </tr>
                                            <tr>
                                                <td>Persediaan Maksimum</td>
                                                <td id="psd_maks"><?=$stok_max;?></td>
                                                <td>ton</td>
                                            </tr>
                                            <tr>
                                                <td>Persediaan Minimum</td>
                                                <td id="psd_min"><?=$stok_min;?></td>
                                                <td>ton</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-2">
                        <div class="col-12">
                            <h3 class="mb-2">Analisa Fuzzy Tsukomoto</h3>
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-5">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Produksi :</label>
                                                        <input type="text" name="" id="val_produksi"
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                        <small id="helpId" class="text-muted">Harap Wajib Disi</small>
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <label for="">Penjualan :</label>
                                                        <input type="text" name="" id="val_penjualan"
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                        <small id="helpId" class="text-muted">Harap Wajib Disi</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-12">
                                                    <a href="#" class="btn btn-lg btn-default fuzzyfikasi"
                                                        id="fuzzyfikasi">Proses Fuzzyfikasi</a>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-7">
                                            <div class="row">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <label for="">Hasil Prediksi Persediaan :</label>
                                                        <input type="text" name="" id="val_prediksi"
                                                            class="form-control" placeholder=""
                                                            aria-describedby="helpId">
                                                        <small id="helpId" class="text-muted">Harap Wajib Disi</small>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-6">
                                                    <button type="submit" class="btn btn-lg btn-primary btn-simpan"
                                                        id="btn-simpan" data-toggle="modal"
                                                        data-target="#add_data_prediksi">Lanjut Proses Simpan</button>
                                                    <!-- <a href="#" class="btn btn-lg btn-success">Print</a> -->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Light table -->


            </div>
        </div>
    </div>
    <div class="row">
    </div>
    <div class="row">
    </div>

    <!-- Modal Simoan -->
    <div class="modal fade" id="add_data_prediksi" tabindex="-1" role="dialog" aria-labelledby="modelTitleId"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Autentikasi Data !!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" method="post" id="form_add">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <label for="">Produksi</label>
                                    <input type="text" name="produksi" id="produksi" class="form-control" placeholder=""
                                        aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Penjualan</label>
                                    <input type="text" name="penjualan" id="penjualan" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Persediaan</label>
                                    <input type="text" name="persediaan" id="persediaan" class="form-control"
                                        placeholder="" aria-describedby="helpId">
                                </div>
                                <div class="form-group">
                                    <label for="">Catatan :</label>
                                    <textarea name="deskripsi" id="deskripsi" cols="30" rows="3"
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary" id="submit_add">Simpan</button>
                </div>
            </div>
        </div>
    </div>

    <!-- End Modal -->

</div>

<?=$this->endsection();?>