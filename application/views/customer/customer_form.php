<!-- Content Header (Page header) -->


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= ucfirst($page) ?> customer</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box_header">
            <div class="float-right">
                <a href="<?= site_url('customer') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>
                    Back</a>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="mx-auto col-sm-6">

                        <form action="<?= site_url('customer/process') ?>" method="POST">
                            <!-- fungsi if else ? 'has-error' (if) : null (else) ?-->

                            <div class="form-grup">
                                <label for="customer_name">Name *</label>
                                <input type="hidden" name="id" value="<?= $row->customer_id ?>">
                                <input type="text" value="<?= $row->name ?>" name="customer_name" class="form-control input-sm" required>
                            </div>
                            <div class="form-grup">
                                <label for="gender">gender *</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender1" value="L"  <?=$row->gender == 'L' ? 'checked'  : ''?>>
                                    <label class="form-check-label" for="gender1">
                                      Laki-Laki
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="gender2" value="P" <?=$row->gender == 'P' ? 'checked'  : ''?>>
                                    <label class="form-check-label" for="gender2">
                                        Perempuan
                                    </label>
                                </div>
                            </div>
                            <div class="form-grup">
                                <label for="phone">phone *</label>
                                <input type="text" value="<?= $row->phone ?>" name="phone" class="form-control input-sm" required>
                            </div>
                            <div class="form-grup">
                                <label for="addr">address *</label>
                                <textarea name="addr" class="form-control input-sm"><?= $row->address ?></textarea>
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