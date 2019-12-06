<div class="col-md-8">
   <?= $this->session->flashdata('message'); ?>
   <div class="tile">
      <a href="<?= base_url('guru/addmateri/') . $this->uri->segment('3') ?>" role="button" class="btn btn-primary float-right">Tambah Materi</a>
      <h3 class="tile-title">Bab Materi</h3>
      <table class="table table-hover">
         <thead>
            <tr>
               <th>#</th>
               <th>Materi</th>
               <th>Tanggal</th>
               <th>Action</th>
            </tr>
         </thead>
         <tbody>
            <?php $i = 1; ?>
            <?php foreach ($bab as $b) : ?>
               <tr>
                  <td><?= $i; ?></td>
                  <td><?= $b['judul']; ?></td>
                  <td><?= date('Y/m/d', $b['date_create']); ?></td>
                  <td>
                     <button class="btn btn-primary" type="button">Edit</button>
                     <a href="<?= base_url('guru/deletemateri/' . $this->uri->segment('3') . '/') . $b['id']; ?>" class="btn btn-danger" role="button">Delete</a>
                  </td>
               </tr>
               <?php $i++; ?>
            <?php endforeach ?>
         </tbody>
      </table>
   </div>
</div>