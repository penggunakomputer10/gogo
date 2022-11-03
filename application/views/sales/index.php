<div class="container my-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <div class="card">
                <div class="card-body">
                    <?php if($this->session->flashdata('success')) :?>
                        <div class="alert alert-success" role="alert">
                        <?php echo $this->session->flashdata('success'); ?>
                        </div>
                    <?php endif;?>
                    <a href="<?= base_url('sales/add'); ?>" class="btn btn-success">Add New Sales</a>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Action</th>

                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($sales as $key =>  $c) :?>

                                <tr>
                                    <td><?= $key+1 ?></td>
                                    <td><?= $c->nama ?></td>
                                    <td>
                                        <a href="<?= base_url('sales/edit/'.$c->id)?> " class="btn btn-primary">Ubah</a>
                                        <a href="<?= base_url('sales/delete/'.$c->id) ?>" class="btn btn-danger">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach;?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>