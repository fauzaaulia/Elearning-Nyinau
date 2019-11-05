<div class="container">
   <div class="row mt-5 d-flex justify-content-center">
      <div class="modal-content">
         <div class="modal-header">
            <h4 class="modal-title" id="exampleModalLabel">Login</h4>
            <?= $this->session->flashdata('message'); ?>
         </div>
         <div class="modal-body">
            <form method="post" action="<?= base_url('auth') ?>">
               <div class="form-group">
                  <label for="Username">username</label>
                  <input name="username" type="text" class="form-control" id="Username" placeholder="Username">
                  <div class="form-control-feedback text-danger"><?= form_error('username') ?></div>
               </div>
               <div class="form-group">
                  <label for="Password">Password</label>
                  <input name="password" type="password" class="form-control" id="Password" placeholder="Password">
                  <div class="form-control-feedback text-danger"><?= form_error('password') ?></div>
               </div>
               <button type="submit" class="btn btn-success">Login</button>
               <!-- <button type="button" class="btn btn-light" data-dismiss="modal">Close</button> -->
            </form>
         </div>
         <div class="modal-footer">
            <!-- code here -->
         </div>
      </div>
   </div>
</div>