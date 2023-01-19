<!-- Content Header (Page header) -->


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?=ucfirst($page)?> MEREK</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box_header">
            <div class="float-right">
                <a href="<?= site_url('unit') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>
                    Back</a>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="mx-auto col-sm-6">

                        <form action="<?= site_url('unit/process') ?>" method="POST">
                            <!-- fungsi if else ? 'has-error' (if) : null (else) ?-->

                            <div class="form-grup">
                                <label for="unit_name">MEREK Name *</label>
                                <input type="hidden" name="id" value="<?=$row->unit_id?>">
                                <input type="text" value="<?= $row->name ?>" name="unit_name" class="form-control input-sm" required>
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