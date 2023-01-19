<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>category</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">category</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->

<section class="content">
  <?php 
//   $this->view('messages')
   ?>
   <div id="flash" data-flash="<?=$this->session->flashdata('success');?>"></div>
    <div class="box">
        <div class="box_header">

            <div class="float-right">
                <a href="<?= site_url('category/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i>
                    Create</a>
            </div>
            <div class="box-body table-responsive">
                <br>
                <table class="table table-bordered tabel-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $key => $data) { ?>

                            <tr>
                                <td style="width:5%;"><?= $no++ ?>.</td>
                                <td><?= $data->name ?></td>
                                <td class="text-center" width="160px">
                                    <!-- menggunakan get -->
                                    <a href="<?= site_url('category/edit/' . $data->category_id) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-edit"></i>
                                        edit</a>
                                    <a href="<?= site_url('category/del/' . $data->category_id) ?>" id="btn-hapus" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i>
                                        delete</a>

                                </td>

                            </tr>

                        <?php } ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</section>
<!-- /.content -->