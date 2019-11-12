<div class="row">
   <div class="col-md-12">
      <?= $this->session->flashdata('message'); ?>
      <div class="tile">
         <div class="tile-body">
            <a href="<?= base_url('guru/addkelas') ?>" class="btn btn-primary float-left mb-3" role="button">Tambah Kelas</a>
            <div class="table-responsive">
               <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                     <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Tanggal</th>
                        <th>Kategori</th>
                        <th>Comment</th>
                        <th>Point</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <?php $i = 1; ?>
                     <?php foreach ($kelas as $k) : ?>
                        <tr>
                           <td><?= $i; ?></td>
                           <td><?= $k['nama']; ?></td>
                           <td><?= date('Y/m/d', $k['date_create']); ?></td>
                           <td><?= $k['kategori']; ?></td>
                           <td><?= $k['komment']; ?></td>
                           <td><?= $k['point']; ?></td>
                           <td>
                              <a href="<?= base_url('guru/babmateri') ?>" role="button" class="btn btn-primary">Edit</a>
                              <a href="<?= base_url('guru/deletemateri') ?>" class="btn btn-danger" role="button">Delete</a>
                           </td>
                        </tr>
                        <?php $i++; ?>
                     <?php endforeach ?>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Modal Tambah Kelas -->
<div class="modal fade" id="tambahKelas" tabindex="-1" role="dialog" aria-labelledby="tambahKelasLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
      <div class="modal-content">
         <div class="modal-header">
            <h5 class="modal-title" id="tambahKelasLabel">Tambah Kelas</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
               <span aria-hidden="true">&times;</span>
            </button>
         </div>
         <div class="modal-body">
            <div class="form-group">
               <label class="col-form-label" for="namaKelas">Nama</label>
               <input class="form-control" id="namaKelas" type="text">
            </div>
            <div class="form-group">
               <label class="col-form-label" for="kategori">Kategori</label>
               <select class="form-control" id="demoSelect" multiple="">
                  <optgroup label="Select Cities">
                     <option>Desain</option>
                     <option>Computer Science</option>
                     <option>Adobe Illustrator</option>
                     <option>Photoshop</option>
                     <option>Coreldraw</option>
                     <option>Otomotif</option>
                     <option>Augmented Reality</option>
                     <option>IOT (Internet of Things)</option>
                     <option>Adobe Premier Pro</option>
                     <option>Bahasa Indonesia</option>
                     <option>Bahasa Inggris</option>
                     <option>Big Data</option>
                     <option>Bootstrap</option>
                     <option>Laravel</option>
                     <option>Codeigniter</option>
                     <option>Adobe Indesign</option>
                     <option>Arduino</option>
                     <option>Godhra</option>
                     <option>Navsari</option>
                     <option>Dahod</option>
                     <option>Botad</option>
                     <option>Kapadwanj</option>
                  </optgroup>
               </select>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <a href="<?= base_url('guru/babmateri') ?>" role="button" class="btn btn-primary">Save changes</a>
         </div>
      </div>
   </div>
</div>