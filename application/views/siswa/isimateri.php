<div class="container">

   <?php if ($materi['link_video']) { ?>
      <div class="row my-5 justify-content-center">
         <div class="col-md-8">
            <div class="embed-responsive embed-responsive-16by9">
               <iframe class="embed-responsive-item" src="<?= $materi['link_video'] ?>?rel=0" allowfullscreen></iframe>
            </div>
         </div>
      </div>
   <?php } ?>

   <div class="row my-5 justify-content-center">
      <h2><?= $materi['judul'] ?></h2>
   </div>

   <div class="row my-5 justify-content-center">
      <div class="col-md-8">
         <?= $materi['isi_materi'] ?>
      </div>
   </div>

</div>