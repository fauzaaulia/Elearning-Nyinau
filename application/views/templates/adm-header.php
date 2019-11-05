<!DOCTYPE html>
<html lang="en">

<head>
   <meta name="description" content="Ahmad Fauza Aulia">
   <!-- Twitter meta-->
   <meta property="twitter:card" content="summary_large_image">
   <meta property="twitter:site" content="@pratikborsadiya">
   <meta property="twitter:creator" content="@pratikborsadiya">
   <!-- Open Graph Meta-->
   <meta property="og:type" content="website">
   <meta property="og:site_name" content="Fauza Aulia">
   <meta property="og:title" content="Fauza Aulia">
   <meta property="og:url" content="https://fauza.id">
   <meta property="og:image" content="http://pratikborsadiya.in/blog/vali-admin/hero-social.png">
   <meta property="og:description" content="Ahmad Fauza Aulia">
   <title><?= $title ?></title>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- Main CSS-->
   <link rel="stylesheet" type="text/css" href="<?= base_url('assets/'); ?>css/main.css">
   <!-- Font-icon css-->
   <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
   <!-- ck editor -->
   <script src="https://cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
</head>

<body class="app sidebar-mini">
   <!-- Navbar-->
   <header class="app-header"><a class="app-header__logo" href="#"> <img height="35px" src="<?= base_url('assets/') ?>images/Nyinau.png" alt=""></a>
      <!-- Sidebar toggle button--><a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a>
      <!-- Navbar Right Menu-->
      <ul class="app-nav">
         <!-- User Menu-->
         <li class="dropdown"><a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu"><i class="fa fa-user fa-lg"></i></a>
            <ul class="dropdown-menu settings-menu dropdown-menu-right">
               <li><a class="dropdown-item" href="#"><i class="fa fa-user fa-lg"></i> Profile</a></li>
               <li><a class="dropdown-item" href="<?= base_url('auth/logout') ?>"><i class="fa fa-sign-out fa-lg"></i> Logout</a></li>
            </ul>
         </li>
      </ul>
   </header>