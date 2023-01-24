<!-- Content Header (Page header) -->


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1><?= ucfirst($page) ?> item</h1>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
    <?php $this->view('messages') ?>
    <div class="box">
        <div class="box_header">
            <div class="float-right">
                <a href="<?= site_url('item') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>
                    Back</a>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="mx-auto col-sm-6">
                        <!-- multipart ci3 -->
                        <?php echo form_open_multipart('item/process') ?>
                        <form action="<?= site_url('item/process') ?>" method="POST">
                            <!-- fungsi if else ? 'has-error' (if) : null (else) ?-->

                            <div class="form-grup">
                                <label for="barcode">barcode *</label>
                                <input type="hidden" name="id" value="<?= $row->item_id ?>">
                                <input type="text" value="<?= $row->barcode ?>" name="barcode" class="form-control input-sm" required>
                            </div>
                            <div class="form-grup">
                                <label for="product_name"> name mobil*</label>
                                <input type="text" value="<?= $row->name ?>" name="product_name" class="form-control input-sm" required>
                            </div>

                            <div class="form-grup">
                                <!-- combo bo versi manual -->
                                <label for="category"> category *</label>
                                <select name="category" id="category" class="form-control" required>
                                    <option value="">- PILIH -</option>

                                    <?php foreach ($category->result() as $key => $data) { ?>
                                        <option value="<?= $data->category_id ?>" <?= $c->category_id == $data->category ? "selected" : null ?>> <?= $data->name ?> </option>
                                    <?php  } ?>

                                </select>
                            </div>
                            <!-- combo box versi ci3 dengan menambahkan fungsi di controler -->
                            <div class="form-grup">
                                <label for="price"> MEREK *</label>

                                <?php echo form_dropdown('unit', $unit, $selected_unit, ['class' => 'form-control', 'required' => 'required']) ?>

                            </div>
                            <div class="form-grup">
                                <label for="price"> price *</label>
                                <input type="number" value="<?= $row->price ?>" name="price" class="form-control input-sm" required>
                            </div>
                            <div class="form-grup">
                                <label for="image">Image</label>
                                <?php if ($page == 'edit') {
                                    if ($row->image != null) { ?>
                                        <div style="margin-bottom: 4px">
                                            <img src="<?= base_url('uploads/product/' . $row->image) ?>" style="width:80%">
                                        </div>
                                <?php
                                    }
                                }  ?>
                                <input type="file" name="image" class="form-control input-sm">
                            </div>

                            <br>
                            <div class="form-grup">
                                <button type="submit" name="<?= $page ?>" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"> save</i></button>
                                <button type="reset" class="btn btn-info btn-flat"><i class="fa fa-times"></i> reset</button>
                            </div>
                            <?php echo form_close() ?>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->