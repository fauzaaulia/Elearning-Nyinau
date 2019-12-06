<div class="row">
   <div class="col-md-8">
      <div class="tile">
         <h3 class="tile-title">Tambah Kelas</h3>
         <form method="post" action="<?= base_url('guru/addkelas') ?>">
            <div class="tile-body">
               <div class="form-group">
                  <label class="control-label">Nama Kelas</label>
                  <input name="nama" class="form-control" type="text" placeholder="Nama Kelas">
                  <div class=" form-control-feedback text-danger"><?= form_error('nama') ?></div>
               </div>
               <div class="form-group">
                  <label class="control-label">Deskripsi</label>
                  <input name="deskripsi" class="form-control" type="text" placeholder="Deskripsi Singkat">
                  <div class=" form-control-feedback text-danger"><?= form_error('deskripsi') ?></div>
               </div>
               <div class="form-group">
                  <label for="exampleSelect1">Kategori</label>
                  <select name="kategori" class="form-control" id="exampleSelect1">
                     <option value="Desain">Desain</option>
                     <option value="UI/UX">UI/UX</option>
                     <option value="Photoshop">Photoshop</option>
                     <option value="Figma">Figma</option>
                     <option value="Illustrator">Illustrator</option>
                     <option value="Coreldraw">Coreldraw</option>
                  </select>
                  <div class=" form-control-feedback text-danger"><?= form_error('kategori') ?></div>
               </div>

            </div>
            <div class="tile-footer">
               <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Register</button>&nbsp;&nbsp;&nbsp;<a class="btn btn-secondary" href="<?= base_url('guru/kelas') ?>"><i class="fa fa-fw fa-lg fa-times-circle"></i>Cancel</a>
            </div>
         </form>
      </div>
   </div>

   <div class="clearix"></div>

</div>