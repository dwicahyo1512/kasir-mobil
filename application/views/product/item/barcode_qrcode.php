<!-- Content Header (Page header) -->


<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>barcode Generate</h1>
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
        </div>
        <div class="box-body">
            <?php

            $generator = new Picqer\Barcode\BarcodeGeneratorPNG();
            echo '<img src="data:image/png;base64,' . base64_encode($generator->getBarcode('081231723897', $generator::TYPE_CODE_128)) . '">';
            ?>
            <br>
            <br>
            <?= $row->barcode ?>
          

        </div>
    </div>
</section>
<!-- /.content -->