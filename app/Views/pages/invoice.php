<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
    <meta name="author" content="Creative Tim">
    <title><?=$title?></title>
    <!-- Favicon -->
    <link rel="icon" href="<?=base_url();?>/assets/img/brand/favicon.png" type="image/png">
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
    <!-- Icons -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/vendor/nucleo/css/nucleo.css" type="text/css">
    <link rel="stylesheet" href="<?=base_url();?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
        type="text/css">
    <!-- Argon CSS -->
    <link rel="stylesheet" href="<?=base_url();?>/assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body>
    <div class="row">
        <div class="col-12">
            <h1 class="text-center">Report Naga Sanghie</h1>
            <hr>
            <h3>Keterangan Invoice  :   <?=$info['deskripsi'];?> </h3>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="table-responsive table-bordered">
                <table class="table invoice-detail-table">
                    <thead>
                        <tr class="thead-default">
                            <th>Produksi</th>
                            <th>Penjualan</th>
                            <th>Prediksi Persediaan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><?=$info['prod_ton'];?></td>
                            <td><?=$info['penj_ton'];?></td>
                            <td><?=$info['stok_ton'];?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</body>
    <script type="text/javascript">
            window.print
    </script>
</html>