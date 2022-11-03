<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="" method="post">
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="">
                            <small class="text-danger">
                                <?php echo form_error('nama') ?>
                            </small>
                        </div>
           
                        
                        <div class="mb-3">
                            <a href="<?= base_url('sales') ?>" class="btn btn-warning">Back</a>

                            <button class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>