<div class="container my-5">
    <div class="card">
        <div class="card-body">
            
            <table class="table table-striped">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Telphone</th>
                    <th scope="col">Sales</th>

                    </tr>
                </thead>
                <tbody>
                    
                    <?php foreach($customers as $key =>  $c) :?>

                        <tr>
                            <td><?= $key+1 ?></td>
                            <td><?= $c->nama ?></td>
                            <td><?= $c->no_telpon ?></td>
                            <td><?= $c->sales_nama ?></td>

                        </tr>
                    <?php endforeach;?>
                </tbody>
            </table>

        </div>
    </div>
</div>