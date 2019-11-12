<!-- QUERY MENU -->
<?php
$role_id = $this->session->userdata('role_id');
$queryMenu = "SELECT user_menu.id, menu
               FROM user_menu
               JOIN user_access_menu
               ON user_menu.id = user_access_menu.menu_id
               WHERE user_access_menu.role_id = $role_id
               ORDER BY user_access_menu.menu_id ASC
               ";
$menu = $this->db->query($queryMenu)->result_array();
?>

<!-- Sidebar menu-->
<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
<aside class="app-sidebar">
   <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" height="48px" width="48px" src="<?= base_url('assets/images/profile/') ?>default.JPG" alt="User Image">
      <div>
         <p class="app-sidebar__user-name"><?= $user['name'] ?></p>
         <p class="app-sidebar__user-designation"><?= $user['role'] ?></p>
      </div>
   </div>
   <ul class="app-menu" id="Admin">

      <!-- Looping Menu -->
      <?php foreach ($menu as $m) : ?>
         <!-- Isi Sub Menu -->
         <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                                       FROM `user_sub_menu`
                                       WHERE `menu_id` = $menuId
                                       AND `is_active` = 1
                                       ";
            $subMenu = $this->db->query($querySubMenu)->result_array();
            ?>

         <?php foreach ($subMenu as $sm) : ?>
            <li><a class="app-menu__item" href="<?= base_url($sm['url']); ?>"><i class="app-menu__icon <?= $sm['icon'] ?>"></i><span class="app-menu__label"><?= $sm['title'] ?></span></a></li>
         <?php endforeach; ?>
      <?php endforeach; ?>

   </ul>
</aside>

<main class="app-content">
   <div class="app-title">
      <div>
         <h1><?= $title ?></h1>
         <p><?= $user['role'] ?></p>
      </div>
   </div>