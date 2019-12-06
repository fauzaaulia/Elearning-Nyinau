<div class="container">
   <div class="row">
      <div class="col-lg my-5">
         <h3>Welcome back, <?= $user['name'] ?></h3>
      </div>
   </div>
   <div class="row">
      <div class="col-lg">
         <span class="mute">Are you ready?</s>
      </div>
   </div>

   <!-- card -->
   <div class="card-deck mt-3">

      <?php foreach ($kelas as $k) : ?>
         <div class="card mb-3" style="max-width: 540px;">
            <div class="row no-gutters">
               <div class="col-md-4">
                  <img src="https://images.pexels.com/photos/3083167/pexels-photo-3083167.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="card-img rounded" alt="...">
               </div>
               <div class="col-md-8">
                  <div class="card-body">
                     <h5 class="card-title"> <a href="<?= base_url('siswa/babmateri/' . $k['id']) ?>"> <?= $k['nama']; ?></a></h5>
                     <p class="card-text"><?= $k['deskripsi']; ?></p>
                     <p class="card-text"><small class="text">
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           <i class="fas fa-star"></i>
                           5/5</small></p>
                  </div>
               </div>
            </div>
         </div>
      <?php endforeach ?>



   </div>
</div>