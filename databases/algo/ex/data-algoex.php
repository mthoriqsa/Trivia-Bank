<?php //include'akses.php' ?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Trivia Bank</title>

    <!-- Bootstrap core CSS-->
    <link href="../../../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <!-- Page level plugin CSS-->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin.css" rel="stylesheet">
    
  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="../../../admin.html">Trivia Bank</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar Search -->
      <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0">
        <div class="input-group">
          <div class="input-group-append">
          </div>
        </div>
      </form>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="#">Admin</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-fw fa-boxes"></i>
                <span>Algoritma</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="../../../databases/algo/ez/data-algoez.php">Beginner</a>
                <a class="dropdown-item" href="../../../databases/algo/in/data-algoin.php">Intermediate</a>
                <a class="dropdown-item" href="../../../databases/algo/ex/data-algoex.php">Expert</a>
            </div>
        </li>       
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-fw fa-boxes"></i>
                <span>C++</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="../../../databases/cpp/ez/data-cppez.php">Beginner</a>
                <a class="dropdown-item" href="../../../databases/cpp/in/data-cppin.php">Intermediate</a>
                <a class="dropdown-item" href="../../../databases/cpp/ex/data-cppex.php">Expert</a>
            </div>
        </li>
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true"
                aria-expanded="false">
                <i class="fas fa-fw fa-boxes"></i>
                <span>Web</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="pagesDropdown">
                <a class="dropdown-item" href="../../../databases/php/ez/data-phpez.php">Beginner</a>
                <a class="dropdown-item" href="../../../atabases/php/in/data-phpin.php">Intermediate</a>
                <a class="dropdown-item" href="../../../databases/php/ex/data-phpex.php">Expert</a>
            </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a>Algoritma</a>
            </li>
            <li class="breadcrumb-item active">Expert</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i> Algoritma (Expert)
              <a class="btn btn-primary" href="new-algoex.php" style="margin-left: 800px" >ADD</a>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php
                  include '../../../connect.php';
                  $query = 'SELECT * FROM algoex';
                  $result = $myPDO->prepare($query);
                  $result->execute();
                ?>
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Pertanyaan</th>
                      <th>Pilihan 1</th>
                      <th>Pilihan 2</th>
                      <th>Pilihan 3</th>
                      <th>Pilihan 4</th>
                      <th>Jawaban</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php while($hasil = $result->fetch()){ ?>
                    <tr>
                      <td>
                        <p>
                          <?php echo $hasil['ID_ALGOEX'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['Q_ALGOEX'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['C1_ALGOEX'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['C2_ALGOEX'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['C3_ALGOEX'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['C4_ALGOEX'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <?php echo $hasil['A_ALGOEX'] ?>
                        </p>
                      </td>
                      <td>
                        <p>
                          <a href="edit-algoex.php?id_algoex=<?php echo $hasil['ID_ALGOEX'] ?>">Ubah</a>
                        </p>
                        <p>
                          <a href="#" data-toggle="modal" data-id=<?php echo $hasil['ID_ALGOEX'];  ?> data-target="#deleteModal" class="btn-delete">Hapus</a>
                        </p>
                      </td>
                    </tr>
                  <?php } ?>
                  </tbody>
                </table>
                
              </div>
            </div>
          </div>

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah anda ingin Logout?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Klik "Logout" jika ingin mengakhiri.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="../../../logout.php">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Delete Modal-->
    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Apakah ingin menghapus data?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Klik "Ya" jika ingin menghapus</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Tidak</button>
            <a class="btn btn-primary" id="link-delete" href="delete-pegawai.php">Ya</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Page level plugin JavaScript-->
    <script src="../../../vendor/datatables/jquery.dataTables.js"></script>
    <script src="../../../vendor/datatables/dataTables.bootstrap4.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin.min.js"></script>

    <!-- Demo scripts for this page-->
    <script src="../../../js/demo/datatables-demo.js"></script>
    <script src="../../../script.js"></script>
    <script src="delete-script.js"></script>
  </body>

</html>
