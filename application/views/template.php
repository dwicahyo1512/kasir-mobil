<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin</title>


    <link rel="stylesheet" href="<?= base_url() ?>assets/https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/fontawesome-free/css/all.min.css">

    <!-- DataTables -->
    <link rel="stylesheet" href="<?= base_url() ?>assets//plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets//plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets//plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/jqvmap/jqvmap.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/dist/css/adminlte.min.css?v=3.2.0">

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.css">
    <!-- SweetAlert2 -->
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/plugins/sweetalert2/animate.min.js">
    <style>
        .swal2-popup {
            /* font-size: 1.6rem !important; */
        }
    </style>

</head>

<body class="hold-transition sidebar-mini ">
    <!-- Site wrapper -->
    <div class="wrapper">
        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand navbar-primary navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
                <li class="nav-item d-none d-sm-inline-block">
                    <a href="<?= base_url('dashboard') ?>" class="nav-link">Home</a>
                </li>

            </ul>

            <!-- Right navbar links -->
            <ul class="navbar-nav ml-auto">
                <!-- Navbar Search -->
                <li class="nav-item">
                    <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                        <i class="fas fa-search"></i>
                    </a>
                    <div class="navbar-search-block">
                        <form class="form-inline">
                            <div class="input-group input-group-sm">
                                <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
                                <div class="input-group-append">
                                    <button class="btn btn-navbar" type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>
                                    <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                        <i class="fas fa-times"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </li>


                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>

                <!-- profil -->
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="<?= base_url() ?>assets/dist/img/cahyo.png" class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline"><?= ucfirst($this->fungsi->user_login()->username) ?></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">

                        <li class="user-header bg-primary">
                            <img src="<?= base_url() ?>assets/dist/img/cahyo.png" class="img-circle elevation-2" alt="User Image">
                            <p>
                                <?= $this->fungsi->user_login()->name ?>
                                <small><?= $this->fungsi->user_login()->address ?></small>
                            </p>
                        </li>

                        <li class="user-body">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <a href="#">Followers</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Sales</a>
                                </div>
                                <div class="col-4 text-center">
                                    <a href="#">Friends</a>
                                </div>
                            </div>

                        </li>

                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="<?= site_url('auth/logout') ?>" class="btn btn-default btn-flat float-right">Sign out</a>
                        </li>
                    </ul>
                </li>

            </ul>
        </nav>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <!-- Brand Logo -->
            <a href="<?= base_url() ?>assets/index3.html" class="brand-link">
                <img src="<?= base_url() ?>assets/dist/img/cahyo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light"><?= $this->fungsi->user_login()->name ?></span>
            </a>

            <!-- Sidebar -->
            <div class="sidebar">
                <br>


                <!-- SidebarSearch Form -->
                <div class="form-inline">
                    <div class="input-group" data-widget="sidebar-search">
                        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-sidebar">
                                <i class="fas fa-search fa-fw"></i>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Sidebar Menu -->
                <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->


                        <li class="nav-item ">
                            <a href="<?= site_url('dashboard') ?>" class="nav-link <?= $this->uri->segment(1) == 'dashboard' || $this->uri->segment(1) == '' ? "active" : '' ?> ">
                                <i class="nav-icon fas fa-th"></i>
                                <p>
                                    Dashboard
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('toko') ?>" class="nav-link <?= $this->uri->segment(1) == 'toko' ? "active" : '' ?> ">
                                <i class="nav-icon fas fa-store"></i>
                                <p>
                                    toko
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="<?= site_url('customer') ?>" class="nav-link  <?= $this->uri->segment(1) == 'customer' ? "active" : '' ?>  ">
                                <i class="nav-icon fas fa-users"></i>
                                <p>
                                    customer

                                </p>
                            </a>

                        </li>
                        <li class="nav-item">


                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class="nav-icon fas fa-shopping-bag"></i>
                                <p>
                                    product
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="<?= site_url('category') ?>" class=" nav-link  <?= $this->uri->segment(1) == 'category' ? "active" : '' ?> ">
                                        <i class="far fa-<?= $this->uri->segment(1) == 'category' ? "check-" : '' ?>circle nav-icon"></i>
                                        <p>Categories</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('unit') ?>" class=" nav-link  <?= $this->uri->segment(1) == 'unit' ? "active" : '' ?> ">
                                        <i class="far fa-<?= $this->uri->segment(1) == 'unit' ? "check-" : '' ?>circle nav-icon"></i>
                                        <p>merek</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('item') ?>" class="nav-link  <?= $this->uri->segment(1) == 'item' ? "active" : '' ?>  ">
                                        <i class="far fa-<?= $this->uri->segment(1) == 'item' ? "check-" : '' ?>circle nav-icon"></i>
                                        <p>items</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-edit"></i>
                                <p>
                                    stock
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">

                                <li class="nav-item">
                                    <a href="<?= site_url('sales') ?>" class="nav-link  <?= $this->uri->segment(1) == 'sales' ? "active" : '' ?> ">
                                        <i class="nav-icon fas fa-shopping-cart"></i>
                                        <p>
                                            pesanan
                                        </p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('stock/in') ?>" class="nav-link">
                                        <i class=" far fa-circle nav-icon"></i>
                                        <p>stock in</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="<?= site_url('stock/out') ?>" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>stock out</p>
                                    </a>
                                </li>

                            </ul>
                        </li>
                        <!-- <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="nav-icon fas fa-table"></i>
                                <p>
                                    Tables
                                    <i class="fas fa-angle-left right"></i>
                                </p>
                            </a>
                            <ul class="nav nav-treeview">
                                <li class="nav-item">
                                    <a href="../tables/simple.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Simple Tables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tables/data.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>DataTables</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="../tables/jsgrid.html" class="nav-link">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>jsGrid</p>
                                    </a>
                                </li>
                            </ul>
                        </li> -->
                        <!-- multi level jika admin maka akan muncul setting user -->
                        <?php if ($this->fungsi->user_login()->level == 1) {
                        ?>
                            <li class="nav-header">setting</li>
                            <li class="nav-item">
                                <a href="<?= site_url('user') ?>" class="nav-link">
                                    <i class="nav-icon far fa-user"></i>
                                    <p>
                                        User
                                    </p>
                                </a>
                            </li>
                        <?php } ?>



                    </ul>
                </nav>
                <!-- /.sidebar-menu -->
            </div>
            <!-- /.sidebar -->
        </aside>
        <!-- Content Wrapper. Contains page content -->
        <script src="<?= base_url() ?>assets/plugins/jquery/jquery.min.js"></script>
        <div class="content-wrapper">
            <?php echo $contents ?>
        </div>
        <!-- /.content-wrapper -->

        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 1.0
            </div>
            <strong>Copyright &copy; 2022-2023 <a href="https://adminlte.io">cahyo</a>.</strong> All rights reserved.
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <!-- SweetAlert2 -->
    <script src="<?= base_url() ?>assets/plugins/sweetalert2/sweetalert2.min.js"></script>
    <!-- script sweat alert -->

    <script>
        var flash = $('#flash').data('flash');
        if (flash) {
            Swal.fire({
                icon: 'success',
                title: 'success',
                text: flash
            })
        }

        $(document).on('click', '#btn-hapus', function(e) {
            e.preventDefault();
            var link = $(this).attr('href');
            
            Swal.fire({
                title: 'apakah anda yakin?',
                text: "data akan dihapus",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya,hapus!'
            }).then((result) => {
                if (result.isConfirmed) {
                    window.location = link;
                }
            })
        })
    </script>




    <!-- akhir sweat alert -->


    <script src="https://code.jquery.com/jquery-3.6.3.js" integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <script src="<?= base_url() ?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/sparklines/sparkline.js"></script>

    <script>
        $.widget.bridge('uibutton', $.ui.button)
    </script>

    <script src="<?= base_url() ?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url() ?>assets/plugins/chart.js/Chart.min.js"></script>


    <script src="<?= base_url() ?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>

    <script src="<?= base_url() ?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>

    <script src="<?= base_url() ?>assets/plugins/moment/moment.min.js"></script>
    <script src="<?= base_url() ?>assets/plugins/daterangepicker/daterangepicker.js"></script>

    <script src="<?= base_url() ?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>

    <script src="<?= base_url() ?>assets/plugins/summernote/summernote-bs4.min.js"></script>

    <script src="<?= base_url() ?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

    <script src="<?= base_url() ?>assets/dist/js/adminlte.js?v=3.2.0"></script>

    <!-- DataTables  & Plugins -->

    <script src="<?= base_url() ?>assets//plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/jszip/jszip.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/pdfmake/pdfmake.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/pdfmake/vfs_fonts.js"></script>
    <script src="<?= base_url() ?>assets//plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="<?= base_url() ?>assets//plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#table1').DataTable()
        })
    </script>
    <script src="<?= base_url() ?>assets/dist/js/pages/dashboard.js"></script>
</body>

</html>