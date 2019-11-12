<body>
   <section class="material-half-bg">
      <div class="cover"></div>
   </section>
   <section class="login-content">
      <div class="logo">
         <h1>Nyinau</h1>
      </div>
      <div class="login-box">
         <form class="login-form" method="post" action="<?= base_url('auth') ?>">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-user"></i>SIGN IN</h3>
            <?= $this->session->flashdata('message'); ?>
            <div class="form-group">
               <label class="control-label">USERNAME</label>
               <input class="form-control" name="username" type="text" placeholder="Username" value="<?= set_value('username'); ?>" autofocus>
               <div class="form-control-feedback text-danger"><?= form_error('username') ?></div>
            </div>
            <div class="form-group">
               <label class="control-label">PASSWORD</label>
               <input class="form-control" name="password" type="password" placeholder="Password">
               <div class="form-control-feedback text-danger"><?= form_error('password') ?></div>
            </div>
            <div class="form-group">
               <div class="utility">
                  <a href="#" data-toggle="flip">Forgot Password ?</a></p>
               </div>
            </div>
            <div class="form-group btn-container">
               <button class="btn btn-primary btn-block"><i class="fa fa-sign-in fa-lg fa-fw"></i>SIGN IN</button>
            </div>
         </form>
         <form class="forget-form" action="index.html">
            <h3 class="login-head"><i class="fa fa-lg fa-fw fa-lock"></i>Forgot Password ?</h3>
            <div class="form-group">
               <label class="control-label">EMAIL</label>
               <input class="form-control" type="text" placeholder="Email">
            </div>
            <div class="form-group btn-container">
               <button class="btn btn-primary btn-block"><i class="fa fa-unlock fa-lg fa-fw"></i>RESET</button>
            </div>
            <div class="form-group mt-3">
               <p class="semibold-text mb-0"><a href="#" data-toggle="flip"><i class="fa fa-angle-left fa-fw"></i> Back to Login</a></p>
            </div>
         </form>
      </div>
   </section>