<div class="container">

   <div class="row my-5 justify-content-center">
      <h2><?= $kelas['nama'] ?></h2>
   </div>

   <div class="row my-5 justify-content-center">
      <div class="list-group col-8">
         <?php foreach ($bab as $b) : ?>
            <a href="<?= base_url('siswa/materi/' . $b['id']) ?>" class="list-group-item list-group-item-action list-group-item-warning">
               <?= $b['judul']; ?>
            </a>
         <?php endforeach ?>
      </div>
   </div>
</div>