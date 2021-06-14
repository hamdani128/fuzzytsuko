<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$title?></title>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: center;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            text-align: center;
        }

        #judul {
            font-family: Arial, Helvetica, sans-serif;
        }

        #judul h3 {
            font-family: Arial, Helvetica, sans-serif;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-12">
            <h1 class="text-center" id="judul">Report Naga Sanghie</h1>
            <hr>
            <p id="judul">Keterangan Invoice : <?=$info['deskripsi'];?> </p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-12">
            <div class="table-responsive table-bordered">
                <table class="table invoice-detail-table" id="customers">
                    <thead>
                        <tr class="thead-default">
                            <th>Produksi (ton)</th>
                            <th>Penjualan (ton)</th>
                            <th>Prediksi Stok (ton)</th>
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
<script src="<?=base_url();?>/assets/vendor/jquery/dist/jquery.min.js"></script>
<script src="<?=base_url();?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<script src="<?=base_url();?>/assets/vendor/js-cookie/js.cookie.js"></script>
<script src="<?=base_url();?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
<script src="<?=base_url();?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>

</html>