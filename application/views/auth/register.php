<body>
   <section class="material-half-bg">
      <div class="cover"></div>
   </section>
   <section class="login-content">
      <div class="logo">
         <h1>Register</h1>
      </div>
      <div class="login-box">
         <form class="tile" method="post" action="<?= base_url('auth/register') ?>">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN UP</h3>
            <?= $this->session->flashdata('message'); ?>
            <div class="form-group">
               <label class="control-label">NAMA LENGKAP</label>
               <input name="nama" class="form-control" type="text" placeholder="Nama Lengkap" autofocus>
               <div class=" form-control-feedback text-danger"><?= form_error('nama') ?></div>
            </div>
            <div class="form-group">
               <label class="control-label">USERNAME</label>
               <input name="username" class="form-control" type="text" placeholder="Username" autofocus>
               <div class=" form-control-feedback text-danger"><?= form_error('username') ?></div>
            </div>
            <div class="form-group">
               <label class="control-label">Email</label>
               <input name="email" class="form-control" type="text" placeholder="Email" autofocus>
               <div class=" form-control-feedback text-danger"><?= form_error('email') ?></div>
            </div>
            <div class="form-group">
               <label for="exampleSelect1">Daftar Sebagai</label>
               <select name="role" class="form-control" id="role">
                  <option value="2">Guru</option>
                  <option value="3">Murid</option>
               </select>
            </div>
            <div class="form-group">
               <label class="control-label">PASSWORD</label>
               <input name="password1" class="form-control" type="password" placeholder="Password">
               <div class=" form-control-feedback text-danger"><?= form_error('password1') ?></div>
            </div>
            <div class="form-group">
               <label class="control-label">CONFIRM PASSWORD</label>
               <input name="password2" class="form-control" type="password" placeholder="Confirmation Password">
            </div>
            <div class="form-group">
               <div class="utility">
                  <p class="semibold-text mb-2"><a href="<?= base_url('auth') ?>">Have account ?</a></p>
               </div>
            </div>
            <div class="form-group btn-container">
               <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN UP</button>
            </div>
         </form>
      </div>
   </section>