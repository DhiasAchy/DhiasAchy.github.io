<?php 
    require('ajax/function.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- Custom Js Function -->
    <script type="text/javascript" src="ajax/script.js"></script> 

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center text-center mb-4">
                        <h1 class="h3 mb-0 text-gray-800">DAFTAR ARSIP IN AKTIF LAPORAN HASIL PENGAWASAN TAHUN 2021
                            DIREKTORAT BADAN USAHA JASA KEUANGAN DAN MANUFAKTUR
                            DEPUTI AKUNTAN NEGARA</h1>
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Card -->
                            <!-- korwas 1 -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-primary shadow h-100 py-2">
                                    <div class="card-body btn" data-toggle="collapse" data-target="#collapseKorwas1">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1 cursor">
                                                    Korwas 1</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- korwas 2 -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-success shadow h-100 py-2">
                                    <div class="card-body btn" data-toggle="collapse" data-target="#collapseKorwas2">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-success text-uppercase mb-1 cursor">
                                                    Korwas 2</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- korwas 3 -->
                            <div class="col-xl-4 col-md-6 mb-4">
                                <div class="card border-left-danger shadow h-100 py-2">
                                    <div class="card-body btn" data-toggle="collapse" data-target="#collapseKorwas3">
                                        <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1 cursor">
                                                    Korwas 3</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                            </div>
                                            <div class="col-auto">
                                                <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!-- end card -->
                    </div>

                    <!-- Content Row -->

                </div>
                <!-- /.container-fluid -->

                <!-- table -->
                <div class="container-fluid">
                    <!-- korwas 1 -->
                        <!-- DataTales Example -->
                        <div class="card shadow mb-4" id="collapseKorwas1" class="collapse">
                            <div class="card-header py-3">
                                <h6 class="font-weight-bold text-primary">Tabel Korwas 1</h6>
                                <!-- <a href="new_korwas.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                    <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
                                </a> -->
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable1" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th class="text-center">Nomor</th>
                                                <th class="text-center">Penugasan Korwas 1</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th class="text-center">Nomor</th>
                                                <th class="text-center">Penugasan Korwas 1</th>
                                                <th class="text-center">Aksi</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                            <?php 
                                                $res_1 = mysqli_query($dbconnect,"SELECT 
                                                        id_penugasan,
                                                        nama
                                                    FROM `penugasan` 
                                                    WHERE id_korwas='1'
                                                ");

                                                if ($res_1 && mysqli_num_rows($res_1)) { 
                                                    $x = 1;
                                                    while ($row1 = mysqli_fetch_assoc($res_1)) { 
                                                        $id = $row1['id_penugasan'];
                                                        ?>
                                                        <tr>
                                                            <td class="text-center"><?= $x; ?></td>
                                                            <td><?= $row1['nama']; ?></td>
                                                            <td class="text-center">
                                                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter" onclick="show_modal('data_korwas1_<?= $id; ?>')">
                                                                    <i class="fas fa-eye fa-sm text-white-50"></i> View
                                                                </button>

                                                                <!-- hidden value -->
                                                                <div class="d-none">
                                                                    <?php 
                                                                        $res_file1 = mysqli_query($dbconnect,"SELECT * FROM `file` WHERE id_penugasan='$id'");

                                                                        if ($res_file1) {
                                                                            while ($row_file1=mysqli_fetch_assoc($res_file1)) { ?>
                                                                                <input type="hidden" class="data_korwas1_<?= $row1['id_penugasan']; ?>" value="<?= $row_file1['nama']; ?>">
                                                                                <?php
                                                                            }
                                                                        }
                                                                    ?>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                        <?php
                                                        $x++;
                                                    }
                                                }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    <!-- end korwas 1 -->
                </div>

                    <!-- modal -->
                        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                </div>
                                <div class="modal-body" id="link_container"></div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                            </div>
                            </div>
                        </div>
                    <!-- end modal -->
                <!-- end table -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Kripton - 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <!-- function -->
    <script type="text/javascript">
        function show_modal(korwas) {
            var value_files = [];
			$('.'+korwas).each(function(){ value_files.push(this.value); });
			var list_value_files = value_files.join('|'); 

            var list_data = '<ul>';
            jQuery.each( value_files, function( i, val ) {
    			list_data += '<li><a href="files/'+val+'">'+val+'</a></li>';
			});
            list_data += '</ul>';

            // tulis ke modal nya
            $('#link_container').append(list_data);

            // alert(list_value_files);
        }

        $(document).ready( function() {
            // cek_connection();

            $('#dataTable1').DataTable();
        });
    </script>

</body>

</html>