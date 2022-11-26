
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>LLDIKTI WIL IX</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- JQuery -->
  <script src="<?=base_url()?>asset/assets/js/jquery.min.js"></script>

  <!-- Favicons -->
  <link href="<?=base_url()?>asset/assets/img/kemendikbud.png" rel="icon">
  <link href="<?=base_url()?>asset/assets/img/kemendikbud.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?=base_url()?>asset/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?=base_url()?>asset/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?=base_url()?>asset/assets/css/style.css" rel="stylesheet">

  <!-- Select2 -->
  <link href="<?=base_url()?>asset/assets/select2/dist/css/select2.min.css" rel="stylesheet" />
  <script src="<?=base_url()?>asset/assets/select2/dist/js/select2.min.js"></script>

</head>

<body class="toggle-sidebar">

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="<?=site_url('data_pegawai')?>" class="logo d-flex align-items-center">
          <img src="<?=base_url()?>asset/assets/img/kemendikbud.png" alt="">
        <span class="d-none d-lg-block">LLDIKTI WILAYAH IX</span>
      </a>
      <ul class="nav nav-tabs nav-tabs-bordered">
        <?php if ($this->fungsi->user_login()->level == 1) {?>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle <?=$this->uri->segment(1) == 'pts' || $this->uri->segment(1) == 'data_pegawai' || $this->uri->segment(1) == 'kgb_hapus' ? 'active' : '' ?>" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><i class="bi bi-journal-text"></i><span> Kepegawaian</span></a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item <?=$this->uri->segment(1) == 'pts' ? 'active' : '' ?>" href="<?= base_url('pts')?>">List PTS</a></li>
              <li><a class="dropdown-item <?=$this->uri->segment(1) == 'data_pegawai' ? 'active' : '' ?>" href="<?= base_url('data_pegawai')?>">List KGB</a></li>
              <li><a class="dropdown-item <?=$this->uri->segment(1) == 'kgb_hapus' ? 'active' : '' ?>" href="<?= base_url('kgb_hapus')?>">List KGB Hapus</a></li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=$this->uri->segment(1) == 'user' ? 'active' : ''?>" aria-current="page" href="<?= site_url('user')?>"><i class="bi bi-person"></i><span> User</span></a>
          </li>
          
        <?php }?>
        <?php if ($this->fungsi->user_login()->level != 1) {?>
          <li class="nav-item">
            <a class="nav-link <?=$this->uri->segment(1) == 'kgb_saya' ? 'active' : ''?>" aria-current="page" href="<?=site_url('kgb_saya')?>"><i class="bi bi-file-earmark-medical"></i><span> KGB Saya</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link <?=$this->uri->segment(1) == 'profile' ? 'active' : ''?>" aria-current="page" href="<?=site_url('profile')?>"><i class="bi bi-person-lines-fill"></i><span> Profile</span></a>
          </li>
        <?php }?>
      </ul>
    </div><!-- End Logo -->

    <nav class="header-nav ms-auto">
      <ul class="d-flex align-items-center">
        <li class="nav-item dropdown pe-3">

          <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
            <?php if ($this->fungsi->user_login()->level == 1) {?>
              <img src="<?=base_url()?>asset/assets/img/profile.jpeg" alt="Profile" class="rounded-circle">
            <?php } else { ?>
              <img src="<?=base_url()?>asset/assets/img/OIP.jfif" alt="Profile" class="rounded-circle">
            <?php }?>
            <span class="d-none d-md-block dropdown-toggle ps-2"><?=$this->fungsi->user_login()->name?></span>
          </a><!-- End Profile Iamge Icon -->

          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
            <li class="dropdown-header">
              <h6><?=$this->fungsi->user_login()->name?></h6>
              <?php if ($this->fungsi->user_login()->level == 1) {?>
                <span>Status Login : Admin</span>
              <?php } elseif ($this->fungsi->user_login()->level != 1) {?>
                <span>Status Login : <?php if ($this->fungsi->user_login()->level == 2) {
                  echo 'Pegawai';
                }elseif ($this->fungsi->user_login()->level == 3) {
                  echo 'Dosen';
                }?></span>
                <br>
                <span>NIP. <?=$this->fungsi->user_login()->username?></span>
              <?php }?>
            </li>
            <li>
              <hr class="dropdown-divider">
            </li>

            <li>
              <a class="dropdown-item d-flex align-items-center" href="<?=site_url('auth/logout')?>">
                <i class="bi bi-box-arrow-right"></i>
                <span>Sign Out</span>
              </a>
            </li>

          </ul><!-- End Profile Dropdown Items -->
        </li><!-- End Profile Nav -->

      </ul>
    </nav><!-- End Icons Navigation -->

  </header><!-- End Header -->

  <main id="main" class="main">

    <?= $contents?>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer" class="footer">
    <div class="copyright">
      &copy; Copyright <strong><span>LLDIKTI Wilayah IX</span></strong>. All Rights Reserved
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?=base_url()?>asset/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/chart.js/chart.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/echarts/echarts.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/quill/quill.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="<?=base_url()?>asset/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="<?=base_url()?>asset/assets/js/main.js"></script>
  

</body>

</html>