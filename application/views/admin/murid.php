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
              <?php $i = 1; ?>
              <?php foreach ($usermurid as $um) : ?>
                <tr>
                  <th><?= $i; ?></th>
                  <td><?= $um['name'] ?></td>
                  <td><?= $um['username'] ?></td>
                  <td><?= $um['email'] ?></td>
                  <td>
                    <button class="btn btn-info btn-sm" type="button">Info</button>
                    <a role="button" href="<?= base_url(); ?>admin/userdelete/<?= $um['id'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete the member?');">delete</a>
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