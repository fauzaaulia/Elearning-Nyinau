<div class="row">
   <div class="col-md-12">
      <div class="tile">
         <div class="tile-body">
            <div class="table-responsive">
               <table class="table table-hover table-bordered" id="sampleTable">
                  <thead>
                     <tr>
                        <th>#</th>
                        <th>Nama</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Action</th>
                     </tr>
                  </thead>
                  <tbody>
                     <tr>
                        <th>1</th>
                        <td>Tiger Nixon</td>
                        <td>Nixon</td>
                        <td>fauza@students.unnes.ac.id</td>
                        <td>
                           <button class="btn btn-info btn-sm" type="button">Info</button>
                           <a role="button" href="<?= base_url(); ?>admin/userdelete/3" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete the member?');">delete</a>
                        </td>
                     </tr>

                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>