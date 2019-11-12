<div class="row">
   <div class="col-md-12">
      <?= $this->session->flashdata('message'); ?>
      <div class="tile">
         <div class="tile-body">
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
                              <a href="#" role="button" class="btn btn-info">Info</a>
                              <a href="<?= base_url('admin/deletekelas/') . $k['id'] ?>" class="btn btn-danger" role="button">Delete</a>
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