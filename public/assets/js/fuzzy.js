$(document).ready(function () {
    $("#fuzzyfikasi").click(function (e) {
        e.preventDefault();
        nilai_penjualan();
        nilai_produksi();
        mencari_nilai_R();
    })
});

function nilai_penjualan() {
    var x = document.getElementById("val_penjualan").value;
    var pnj_maks = document.getElementById("pnj_maks").innerText;
    var pnj_min = document.getElementById("pnj_min").innerText;

    var c = parseFloat(pnj_maks) - parseFloat(pnj_min);
    var pnj_turun, pnj_naik;

    if (parseFloat(x) < parseFloat(pnj_min)) {
        pnj_turun = 1;
        pnj_naik = 0;
    } else if (parseFloat(x) > parseFloat(pnj_maks)) {
        pnj_turun = 0;
        pnj_naik = 1;
    } else {
        pnj_turun = (parseFloat(pnj_maks) - parseFloat(x)) /c;
        pnj_naik = (parseFloat(x) - parseFloat(pnj_min)) / c;
    }

    document.getElementById('penj_turun').innerHTML = pnj_turun.toFixed(2);
    document.getElementById('penj_naik').innerHTML = pnj_naik.toFixed(2);

}

function nilai_produksi() {
    var a = document.getElementById("val_produksi").value;
    var prd_maks = document.getElementById("prd_maks").innerText;
    var prd_min = document.getElementById("prd_min").innerText;
    var prd_sedikit, prd_banyak;

    var d = parseInt(prd_maks) - parseInt(prd_min);

    if (parseFloat(a) < parseInt(prd_min)) {
        prd_sedikit = 1;
        prd_banyak = 0;
    } else if (parseFloat(a) > parseInt(prd_maks)) {
        prd_sedikit = 0;
        prd_banyak = 1;
    } else {
        prd_sedikit = (parseInt(prd_maks) - parseFloat(a)) / parseInt(d);
        prd_banyak = (parseFloat(a) - parseInt(prd_min)) / parseInt(d);
    }

    document.getElementById('prod_sedikit').innerHTML = prd_sedikit.toFixed(2);
    document.getElementById('prod_banyak').innerHTML = prd_banyak.toFixed(2);
}

function mencari_nilai_R() {
    var a, b, c, d, f, d, e, h, i, j, r1, r2, r3, r4, z1, z2, z3, z4, hasil;
    a = parseFloat(document.getElementById('penj_turun').innerText);
    b = parseFloat(document.getElementById('prod_banyak').innerText);
    e = parseFloat(document.getElementById('penj_naik').innerText);
    h = parseFloat(document.getElementById('prod_sedikit').innerText);

    c = parseFloat(document.getElementById('psd_maks').innerText)
    f = parseFloat(document.getElementById('psd_min').innerText)

    d = c - f;


    r1 = Math.min(a, b);
    document.getElementById('r1').innerHTML = parseFloat(r1);
    z1 = (d * r1) + f;
    document.getElementById('z1').innerHTML = z1.toFixed(3);

    r2 = Math.min(a, h);
    document.getElementById('r2').innerHTML = parseFloat(r2);
    z2 = (d * r2) + c;
    document.getElementById('z2').innerHTML = z2.toFixed(3);

    r3 = Math.min(e, b);
    document.getElementById('r3').innerHTML = parseFloat(r3);
    z3 = (d * r3) + f;
    document.getElementById('z3').innerHTML = z3.toFixed(3);

    r4 = Math.min(e, h);
    document.getElementById('r4').innerHTML = parseFloat(r4);
    z4 = (d * r4) + c;
    document.getElementById('z4').innerHTML = z4.toFixed(3);

    hasil = ((r1 * z1) + (r2 * z2) + (r3 * z3) + (r4 * z4)) / (r1 + r2 + r3 + r4)
    document.getElementById('val_prediksi').value = hasil.toFixed(3);

}

$(document).on('click', '#btn-simpan', function () {
    var pr = $('#val_produksi').val();
    var pj = $('#val_penjualan').val();
    var ps = $('#val_prediksi').val();

    $('.modal-body #produksi').val(pr);
    $('.modal-body #penjualan').val(pj);
    $('.modal-body #persediaan').val(ps);
})

$(document).ready(function () {
    $("#submit_add").click(function () {
        Swal.fire({
            title: 'Apakah Anda Yakin Data Akan Ditambahkan ?',
            text: "Apakah Data ini Sudah Valid !",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, Save it!'
        }).then((result) => {
            if (result.value) {
                $("#add_data_prediksi").modal();
                document.getElementById("form_add").action = '/add';
                $("#form_add").submit();
            }
        })
    });
});

$(document).on('click', '.btn-hapus', function (e) {
    e.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Apakah Anda Yakin Data Akan dihapus ?',
        text: "Data Yang Telah Terhapus Tidak Bisa Dikembalikan !",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Yes, delete it!'
    }).then((result) => {
        if (result.value) {
            document.location.href = href;
        }
    })
})