<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <form action="/customer/add" method="post">
                        <div class="mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" class="form-control" value="">
                            <small class="text-danger">
                                <?php echo form_error('nama') ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="no_telpon">Telpon</label>
                            <input type="number" name="no_telpon" class="form-control">
                            <small class="text-danger">
                                <?php echo form_error('no_telpon') ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <label for="id_sales">Sales</label>
                            <select name="id_sales" id="id_sales" class="form-control">
                                <?php foreach($sales as $s) :?>
                                    <option value="<?= $s->id ?>"><?= $s->nama ?></option>
                                <?php endforeach;?>
                            </select>
                            <small class="text-danger">
                                <?php echo form_error('id_sales') ?>
                            </small>
                        </div>
                        <div class="mb-3">
                            <a href="<?= base_url('customer') ?>" class="btn btn-warning">Back</a>

                            <button class="btn btn-success">Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>