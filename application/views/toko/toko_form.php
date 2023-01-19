<!-- Content Header (Page header) -->


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?=ucfirst($page)?> toko</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box_header">
            <div class="float-right">
                <a href="<?= site_url('toko') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>
                    Back</a>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="mx-auto col-sm-6">

                        <form action="<?= site_url('toko/process') ?>" method="POST">
                            <!-- fungsi if else ? 'has-error' (if) : null (else) ?-->

                            <div class="form-grup">
                                <label for="toko_name">Name *</label>
                                <input type="hidden" name="id" value="<?=$row->toko_id?>">
                                <input type="text" value="<?= $row->name ?>" name="toko_name" class="form-control input-sm" required>
                            </div>
                            <div class="form-grup">
                                <label for="phone">phone *</label>
                                <input type="text" value="<?= $row->phone ?>" name="phone" class="form-control input-sm" required>
                            </div>
                            <div class="form-grup">
                                <label for="addr">address *</label>
                                <textarea name="addr" class="form-control input-sm"><?= $row->address ?></textarea>
                            </div>
                            <div class="form-grup">
                                <label for="desc">description *</label>
                                <textarea name="desc" class="form-control input-sm"><?= $row->description ?></textarea>
                            </div>
                            <br>
                            <div class="form-grup">
                                <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"> save</i></button>
                                <button type="reset" class="btn btn-info btn-flat"><i class="fa fa-times"></i> reset</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->