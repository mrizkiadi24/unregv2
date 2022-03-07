<?php
	include 'conn.php';
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>TukuTuku</title>

  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
      <!-- Font Awesome -->
      <link
      rel="stylesheet"
      href="plugins/fontawesome-free/css/all.min.css"
    />
    <!-- Ionicons -->
    <link
      rel="stylesheet"
      href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css"
    />
    <!-- DataTables -->
    <link
      rel="stylesheet"
      href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css"
    />
    <link
      rel="stylesheet"
      href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css"
    />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- Google Font: Source Sans Pro -->
    <link
      href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700"
      rel="stylesheet"
    />
</head>
<body class="hold-transition sidebar-collapse layout-top-nav">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
    <div class="container">
      <a href="index3.html" class="navbar-brand">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">MSISDN</span>
      </a>
      
      <button class="navbar-toggler order-1" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse order-3" id="navbarCollapse">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          <li class="nav-item">
            <a href="index3.html" class="nav-link">Beranda</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Cari MSISDN</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">MSISDN</a></li>
              <!-- <li class="breadcrumb-item active"></li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="card card-primary card-outline">
          <div class="card-header">
            <h3 class="card-title">
              <i class="fas fa-edit"></i>
            
            </h3>
          </div>
          <div class="card-body">
          <form action="index.php" method="post">
	  			  <div class="row">
					    <div class="col-lg-6">
	  				    MSISDN: <input type="text" class="form-control" name="msisdn" minlength="10" maxlength="13" required placeholder="6281xxxxxxxxx">
	  				  </div>
					    <div class="col-lg-6">
						    <input type="submit" class="btn btn-primary m-4">
	  				  </div>
	  			  </div>
  			  </form>
            <table id="example2" class="table table-bordered table-hover">
            <thead>
              <tr>
                <th>MSISDN</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
            <?php
			if (isset($_POST["msisdn"])) {
				$msisdn = $_POST["msisdn"];
				// echo "<tr>
				// 			<td>" . $msisdn . "</td>
				// 			<td> SASSMasuk List Unreg Masal </td>
				// 			</tr>";
				$query = "select * from search_msisdn where b_msisdn = $msisdn";
				$unreg = mysqli_query($conn, $query);
				while ($row = mysqli_fetch_array($unreg)) {
						$no_hp = $row['b_msisdn'];
						if ($no_hp == ''){
              
              echo "<tr>
							<td>BLABLA</td>
							<td> MSISDN Tidak Masuk List Unreg Masal </td>
							</tr>";
						}else{
              echo "<tr>
							<td>" . $no_hp . "</td>
							<td> Masuk List Unreg Masal </td>
							</tr>";
						
						}
							
						
				}
				
			}else {
				$msisdn = null;
				echo "no username supplied";
			}
			?>
          </table>
          </div>
          <!-- /.card -->
        </div>
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.5
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>
  <!-- /.navbar -->

  <!-- Content Wrapper. Contains page content -->
 
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- page script -->
    <script>
      $(function () {
        $("#example1").DataTable({
          responsive: true,
          autoWidth: false,
          scrollX: true,
        });
        $("#example2").DataTable({
          paging: true,
          lengthChange: false,
          searching: false,
          ordering: true,
          info: true,
          autoWidth: false,
          responsive: true,
          scrollX: true,
        });
      });
    </script>
    <script>
      $(document).ready(function () {
        $("#example").DataTable({
          scrollX: true,
        });
      });
    </script>
</body>
</html>
