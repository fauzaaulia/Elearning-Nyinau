<div class="row">
   <div class="col-md-12">
      <div class="tile">
         <div class="tile-body">
            <button data-toggle="modal" data-target="#tambahKelas" class="btn btn-primary float-left mb-3" type="button">Tambah Kelas</button>
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
                     <tr>
                        <td>1</td>
                        <td>System Architect</td>
                        <td>2011/04/25</td>
                        <td>Computer Science</td>
                        <td>61</td>
                        <td>600</td>
                        <td>
                           <a href="<?= base_url('guru/babmateri') ?>" role="button" class="btn btn-primary">Edit</a>
                           <button class="btn btn-danger" type="button">Delete</button>
                        </td>
                     </tr>
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