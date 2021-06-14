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
  <!-- <link rel="stylesheet" href="<?=base_url();?>/assets/css/style.css" type="text/css"> -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css"
    type="text/css">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?=base_url();?>/assets/css/argon.css?v=1.2.0" type="text/css">
</head>$

<body>
  <!-- Sidenav -->
  <?=$this->include('layout/sidebar');?>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <?=$this->include('layout/topbar');?>
    <!-- Header -->
    <!-- Header -->
    <?=$this->renderSection('content');?>

    <!-- Footer -->
    <?=$this->include('layout/footer');?>
  </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?=base_url();?>/assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="<?=base_url();?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url();?>/assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="<?=base_url();?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="<?=base_url();?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="<?=base_url();?>/assets/js/argon.js?v=1.2.0"></script>
  <script src="<?=base_url();?>/assets/js/fuzzy.js"></script>
  <script src="<?=base_url();?>/assets/vendor/sweetalert2/dist/sweetalert2.all.min.js"></script>
  <script>
    function basicPopup(url) {
      popupWindow = window.open(url, 'popUpWindow',
        'height=500px,widht=800x,left=500,top=500,resizable=yes,toolbar=yes,menubar=no,location=no,directories=no,status=yes'
      )
    }

    const swal = $('.swal').data('swal');
    if (swal) {
      Swal.fire({
        title: 'Good Luck !',
        text: swal,
        icon: 'success',
        showConfirmButton: false,
        timer: 2000
      })
    }
  </script>


</body>

</html>