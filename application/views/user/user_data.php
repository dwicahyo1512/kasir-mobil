<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>data user</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">data user</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box_header">
            <h3 class="box-title">
                Data User
            </h3>
            <div class="float-right">
                <a href="<?= site_url('user/add') ?>" class="btn btn-primary btn-flat">
                    <i class="fa fa-user-plus"></i>
                    Create</a>
            </div>
            <div class="box-body table-responsive">
                <br>
                <table class="table table-bordered tabel-striped" id="table1">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Username</th>
                            <th>Name</th>
                            <th>Address</th>
                            <th>Level</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($row->result() as $key => $data) { ?>

                            <tr>
                                <td style="width:5%;"><?= $no++ ?>.</td>
                                <td><?= $data->username ?></td>
                                <td><?= $data->name ?></td>
                                <td><?= $data->address ?></td>
                                <td><?= $data->level == 1 ? "admin" : "karyawan" ?></td>
                                <td class="text-center" width="160px" >
                                    <a href="<?= site_url('user/edit/'.$data->user_id) ?>" class="btn btn-primary btn-xs">
                                        <i class="fa fa-edit"></i>
                                        Edit</a>
                                        <form action="<?=site_url('user/del')?>" method="post">
                                        <input type="hidden" name="user_id" value="<?=$data->user_id?>">
                                    <button onclick="return confirm('apakah yakin hapus user ini')" class="btn btn-danger btn-xs">
                                        <i class="fa fa-trash"></i>
                                        Delete</button>
                                    </form>
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