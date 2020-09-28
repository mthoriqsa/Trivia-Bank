<?php include'add-phpex.php' ?>
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
                <a class="dropdown-item" href="../../../databases/php/in/data-phpin.php">Intermediate</a>
                <a class="dropdown-item" href="../../../databases/php/ex/data-phpex.php">Expert</a>
            </div>
        </li>

      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a>Pemrograman Web</a>
            </li>
            <li class="breadcrumb-item active">Expert</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>  Tambah Data Pemrograman Web (Expert)
          </div>
            <div class="col-lg-6">
              <div class="card">
                <div class="card-body card-block">
                  <form action="add-phpex.php" method="post" enctype="multipart/form-data" class="form-horizontal">
                  <!-- Q -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Pertanyaan</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <textarea name="q-phpex" id="textarea-input" rows="9" placeholder="Question" class="form-control" required></textarea>
                      <small class="form-text text-muted">Masukkan pertanyaan</small>
                    </div>
                  </div>
                  <!-- C1 -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Pilihan 1</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="c1-phpex" placeholder="Choice 1" class="form-control" required>
                      <small class="form-text text-muted">Masukkan pilihan jawaban A</small>
                    </div>
                  </div>
                  <!-- C2 -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Pilihan 2</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="c2-phpex" placeholder="Choice 2" class="form-control" required>
                      <small class="form-text text-muted">Masukkan pilihan jawaban B</small>
                    </div>
                  </div>
                  <!-- C3 -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Pilihan 3</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="c3-phpex" placeholder="Choice 3" class="form-control" required>
                      <small class="form-text text-muted">Masukkan pilihan jawaban C</small>
                    </div>
                  </div>
                  <!-- C2 -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Pilihan 4</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="c4-phpex" placeholder="Choice 4" class="form-control" required>
                      <small class="form-text text-muted">Masukkan pilihan jawaban D</small>
                    </div>
                  </div>
                  <!-- A -->
                  <div class="row form-group">
                    <div class="col col-md-3">
                      <label for="text-input" class=" form-control-label">Jawaban</label>
                    </div>
                    <div class="col-12 col-md-9">
                        <input type="text" id="text-input" name="a-phpex" placeholder="Answer" class="form-control" required>
                      <small class="form-text text-muted">Masukkan jawaban benar</small>
                    </div>
                  </div>
                  <div class="card-footer">
                    <button type="submit" name="btn-submit" class="btn btn-primary btn-sm">
                      <i class="fa fa-dot-circle-o"></i> Submit
                    </button>
                    <button type="reset" class="btn btn-danger btn-sm">
                      <i class="fa fa-ban"></i> Reset
                    </button>
                  </div>
                </form>
               <!-- end form -->
                </div>                
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
  </body>

</html>
