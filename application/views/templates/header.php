<!DOCTYPE html>
<html lang="en">

<head>
   <title>.NYINAU</title>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="X-UA-Compatible" content="ie=edge">
   <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/css/owl.carousel.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/owl-carousel/css/owl.theme.default.css">
   <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/mdi/css/materialdesignicons.min.css">
   <link rel="stylesheet" href="<?= base_url('assets/') ?>vendors/aos/css/aos.css">
   <link rel="stylesheet" href="<?= base_url('assets/') ?>css/style.min.css">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
   <header id="header-section">
      <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
         <div class="container">
            <div class="navbar-brand-wrapper d-flex w-100">
               <img height="50" src="<?= base_url('assets/') ?>images/Nyinau.png" alt="">
               <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="mdi mdi-menu navbar-toggler-icon"></span>
               </button>
            </div>
            <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
               <ul class="navbar-nav align-items-lg-center align-items-start ml-auto">
                  <li class="d-flex align-items-center justify-content-between pl-4 pl-lg-0">
                     <div class="navbar-collapse-logo">
                        <img height="30px" src="<?= base_url('assets/') ?>images/Nyinau.png" alt="">
                     </div>
                     <button class="navbar-toggler close-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-close navbar-toggler-icon pl-5"></span>
                     </button>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#header-section">Beranda <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#features-section">Tentang</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#case-studies-section">Populer</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="#feedback-section">Testimoni</a>
                  </li>
                  <li class="nav-item btn-contact-us pl-4 pl-lg-0">
                     <a href="<?= base_url('auth/daftar') ?>" role="button" class="btn btn-danger">Daftar</a>
                     <button class="btn btn-info" data-toggle="modal" data-target="#exampleModal">Login</button>
                  </li>
               </ul>
            </div>
         </div>
      </nav>
   </header>