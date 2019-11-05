   <!-- Sidebar menu-->
   <div class="app-sidebar__overlay" data-toggle="sidebar"></div>
   <aside class="app-sidebar">
      <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" height="48px" width="48px" src="<?= base_url('assets/images/profile/') ?>default.JPG" alt="User Image">
         <div>
            <p class="app-sidebar__user-name"><?= $user['name'] ?></p>
            <p class="app-sidebar__user-designation"><?= $user['role_id'] ?></p>
         </div>
      </div>
      <ul class="app-menu" id="Guru">
         <li><a class="app-menu__item" href="<?= base_url('guru/'); ?>"><i class="app-menu__icon fa fa-dashboard"></i><span class="app-menu__label">Dashboard</span></a></li>
         <li><a class="app-menu__item" href="<?= base_url('guru/kelas'); ?>"><i class="app-menu__icon fa fa-th-list"></i><span class="app-menu__label">Kelas</span></a></li>
         <li><a class="app-menu__item" href="<?= base_url('guru/profil'); ?>"><i class="app-menu__icon fa fa-user"></i><span class="app-menu__label">Profil</span></a></li>
      </ul>
   </aside>

   <main class="app-content">
      <div class="app-title">
         <div>
            <h1><i class="fa fa-dashboard"></i><?= $title ?></h1>
            <p><?= $dec ?></p>
         </div>
      </div>