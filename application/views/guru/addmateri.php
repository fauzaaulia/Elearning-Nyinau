<div class="row">
   <div class="col-md-12">
      <div class="tile">
         <form method="post" action="<?= base_url('guru/addmateri/') . $this->uri->segment('3'); ?>">
            <input class="form-control" name="kelas_id" type="text" value="<?= $this->uri->segment('3'); ?>" hidden>
            <div class="form-group">
               <label class="col-form-label" for="judulMateri"><b>Judul Materi</b></label>
               <input class="form-control" name="judul" type="text">
            </div>
            <div class="form-group">
               <label for="exampleInputFile"><b>Image Cover</b></label>
               <input class="form-control-file" name="cover" type="file" aria-describedby="fileHelp"><small class="form-text text-muted" id="fileHelp">This is some placeholder block-level help text for the above input. It's a bit lighter and easily wraps to a new line.</small>
            </div>
            <label class="col-form-label" for="isiMateri"><b>Isi Materi</b></label>
            <textarea name="editor1"></textarea>
            <script>
               CKEDITOR.replace('editor1');
            </script>
            <button class="btn btn-primary mt-3" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i> Save</button>
         </form>
      </div>
   </div>
</div>