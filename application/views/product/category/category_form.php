<!-- Content Header (Page header) -->


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?=ucfirst($page)?> category</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box_header">
            <div class="float-right">
                <a href="<?= site_url('category') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>
                    Back</a>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="mx-auto col-sm-6">

                        <form action="<?= site_url('category/process') ?>" method="POST">
                            <!-- fungsi if else ? 'has-error' (if) : null (else) ?-->

                            <div class="form-grup">
                                <label for="category_name">Category Name *</label>
                                <input type="hidden" name="id" value="<?=$row->category_id?>">
                                <input type="text" value="<?= $row->name ?>" name="category_name" class="form-control input-sm" required>
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