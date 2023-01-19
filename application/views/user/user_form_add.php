<!-- Content Header (Page header) -->
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>add user</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">add user</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">

    <div class="box">
        <div class="box_header">
            <div class="float-right">
                <a href="<?= site_url('user') ?>" class="btn btn-warning btn-flat">
                    <i class="fa fa-undo"></i>
                    Back</a>
            </div>
            <div class="box-body">
                <div class="row">
                    <div class="mx-auto col-sm-6">

                        <form action="" method="POST">
                              <!-- fungsi if else ? 'has-error' (if) : null (else) ?-->
                              
                            <div class="form-grup error">
                                <label for="fullname">fullname *</label>
                                <input type="text" value="<?=set_value('fullname') ?>" name="fullname" class="form-control input-sm">
                               <span class="text-danger"><?=form_error('fullname')?></span> 
                            </div>
                            <div class="form-grup">
                                <label for="username">username *</label>
                                <input type="text" value="<?=set_value('username') ?>"  name="username" class="form-control">
                              <span class="text-danger"><?=form_error('username')?></span>  
                            </div>
                            <div class="form-grup">
                                <label for="password">password *</label>
                                <input type="password" value="<?=set_value('password') ?>"  name="password" class="form-control">
                                <span class="text-danger"><?=form_error('password')?></span> 
                            </div>
                            <div class="form-grup">
                                <label for="password">password confirmation*</label>
                                <input type="password" value="<?=set_value('passconf') ?>"  name="passconf" class="form-control">
                                <span class="text-danger"><?=form_error('passconf')?></span> 

                            </div>
                            <div class="form-grup">
                                <label for="address">address </label>
                                <textarea name="address"  class="form-control"><?=set_value('address') ?> </textarea> 
                                <?=form_error('address')?>
                            </div>
                            <div class="form-grup">
                                <label for="level">level *</label>
                                <select name="level" class="form-control" id="">
                                    <option value="">pilih</option>
                                 <!-- agar value tetap sama -->
                                    <option value="1" <?=set_value('level') == 1 ? "selected" : null ?>>admin</option>
                                    <option value="2" <?=set_value('level') == 2 ? "selected" : null ?>>karyawan</option>
                                </select>
                                <span class="text-danger">  <?=form_error('level')?></span>
                              
                            </div>
                            <br>
                            <div class="form-grup">
                                <button type="submit" class="btn btn-success btn-flat"><i class="fa fa-paper-plane"> save</i></button>
                                <button type="reset" class="btn btn-info btn-flat"><i class="fa fa-times"></i> reset</button>
                            </div>
                        </form>
                        <br>
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
<!-- /.content -->