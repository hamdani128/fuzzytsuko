<?=$this->extend('layout/template');?>

<?=$this->section('content');?>

<!-- Header -->
<div class="header bg-default pb-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="row align-items-center py-4">
                <div class="col-lg-6 col-7">
                    <h6 class="h2 text-white d-inline-block mb-0">Informasi Data</h6>
                    <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                        <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                            <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                            <li class="breadcrumb-item"><a href="#">Tables</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Tables</li>
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
                <!-- Card header -->


                <div class="card-header border-0">
                    <div class="row">
                        <div class="col-6">
                            <h3 class="mb-0">Informasi Data Kopi</h3>
                        </div>
                        <div class="col-6">
                            <button class="btn btn-md btn-success text-right" data-toggle="modal"
                                data-target="#modalImport"><i class="fas fa-print"></i> Import Data
                                xlxs </button>
                            <a href="/info/invoice/all" class="btn btn-md btn-primary text-right"
                                onclick="basicPopup(this.href);return false"><i class="fas fa-print"></i> Cetak Dokumen
                                All</a>
                        </div>
                    </div>
                </div>
                <!-- Light table -->
                <div class="swal" data-swal="<?=session()->get('message');?>"></div>
                <div class="swal_import" data-swal="<?=session()->get('import');?>"></div>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" class="sort" data-sort="name">No.</th>
                                <th scope="col" class="sort" data-sort="budget">Deskripsi Tahun</th>
                                <th scope="col" class="sort" data-sort="produksi">Produksi (ton)</th>
                                <th scope="col" class="sort" data-sort="penjualan">Penjualan (ton)</th>
                                <th scope="col" class="sort" data-sort="stokn">Stok (ton)</th>
                                <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody class="list">
                            <?php $i = 1;?>
                            <?php if (count($info) > 0) {
    foreach ($info as $row): ?>
                            <tr>
                                <td class="no">
                                    <?=$i++?>
                                </td>
                                <td class="deskripsi">
                                    <?=$row['deskripsi'];?>
                                </td>
                                <td class="Produksi">
                                    <?=$row['prod_ton'];?>
                                </td>
                                <td class="penjualan">
                                    <?=$row['penj_ton'];?>
                                </td>
                                <td class="stok">
                                    <?=$row['stok_ton'];?>
                                </td>
                                <td class="text-right">
                                    <div class="dropdown">
                                        <a class="btn btn-sm btn-icon-only text-light" href="#" role="button"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i class="fas fa-ellipsis-v"></i>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">
                                            <a class="dropdown-item" href="/info/invoice/<?=$row['id'];?>"
                                                onclick="basicPopup(this.href);return false">Print Priview</a>
                                            <a class="dropdown-item btn-hapus"
                                                href="/info/delete/<?=$row['id'];?>">Delete</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <?php endforeach;?>
                            <?php } else {?>
                            <tr>
                                <td colspan="5" class="text-center">Tidak Ada Data</td>
                            </tr>
                            <?php }?>
                        </tbody>
                    </table>
                </div>
                <!-- Card footer -->
                <!-- <div class="card-footer py-4">
                    <nav aria-label="...">
                        <ul class="pagination justify-content-end mb-0">
                            <li class="page-item disabled">
                                <a class="page-link" href="#" tabindex="-1">
                                    <i class="fas fa-angle-left"></i>
                                    <span class="sr-only">Previous</span>
                                </a>
                            </li>
                            <li class="page-item active">
                                <a class="page-link" href="#">1</a>
                            </li>
                            <li class="page-item">
                                <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#">
                                    <i class="fas fa-angle-right"></i>
                                    <span class="sr-only">Next</span>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div> -->
            </div>
        </div>
    </div>

</div>

<!-- Modal -->
<div class="modal fade" id="add_print" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Laporan Produksi Permonth</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Print</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Import -->
<!-- Modal Import Excel -->
<div class="modal fade" id="modalImport" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header bg-success">
                <h5 class="modal-title">import Data Excel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="" method="POST" id="add_import" enctype="multipart/form-data">
                    <div class="form-group">
                        <label for="exampleInputFile">File input</label>
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile" name="filename">
                                <label class="custom-file-label" for="exampleInputFile"></label>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="submit_import">Simpan</button>
            </div>
        </div>
    </div>
</div>


<?=$this->endsection();?>