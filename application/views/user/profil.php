<div class="row user">
   <div class="col-md-12">
      <div class="profile">
         <div class="info"><img class="user-img" height="110px" width="110px" src="<?= base_url('assets/images/profile/') ?>default.JPG">
            <h4><?= $user['name'] ?></h4>
            <p><?= $user['role'] ?></p>
         </div>
         <div class="cover-image"></div>
      </div>
   </div>
   <div class="col-md-3">
      <div class="tile p-0">
         <ul class="nav flex-column nav-tabs user-tabs">
            <li class="nav-item"><a class="nav-link active" href="#user-timeline" data-toggle="tab">Timeline</a></li>
            <li class="nav-item"><a class="nav-link" href="#user-settings" data-toggle="tab">Edit Profil</a></li>
         </ul>
      </div>
   </div>
   <div class="col-md-9">
      <div class="tab-content">
         <div class="tab-pane active" id="user-timeline">
            <div class="timeline-post">
               <div class="post-media"><a href="#"><img height="150px" width="150px" src="<?= base_url('assets/images/profile/') ?>default.JPG"></a>
                  <div class="content">
                     <h2><a href="#"><?= $user['name'] ?></a></h2>
                     <h5>Role : <span class="badge badge-pill badge-warning"><?= $user['role'] ?></span></h5>
                     <h5>Username : <span class="badge badge-pill badge-danger"><?= $user['username'] ?></span></h5>
                     <h5>E-mail : <span class="badge badge-pill badge-success"><?= $user['email'] ?></span></h5>
                     <h5>Gender : <span class="badge badge-pill badge-success">Laki-laki</span></h5>
                     <h5>Alamat : <span class="badge badge-pill badge-success">Semarang</span></h5>
                     <h5> No-Hp : <span class="badge badge-pill badge-success">08122345678</span></h5>
                  </div>
               </div>
            </div>
         </div>
         <div class="tab-pane fade" id="user-settings">
            <div class="tile user-settings">
               <h4 class="line-head">Edit Profil</h4>
               <form>
                  <div class="row">
                     <div class="col-md-8 mb-4">
                        <label>Nama Lengkap</label>
                        <input class="form-control" type="text">
                     </div>
                  </div>
                  <div class="row">
                     <div class="col-md-8 mb-4">
                        <label>Email</label>
                        <input class="form-control" type="text">
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-md-8 mb-4">
                        <label>Gender</label>
                        <input class="form-control" type="text">
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-md-8 mb-4">
                        <label>Alamat</label>
                        <input class="form-control" type="text">
                     </div>
                     <div class="clearfix"></div>
                     <div class="col-md-8 mb-4">
                        <label>Phone Number</label>
                        <input class="form-control" type="text">
                     </div>
                  </div>
                  <div class="row mb-10">
                     <div class="col-md-12">
                        <button class="btn btn-primary" type="button"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>
</div>