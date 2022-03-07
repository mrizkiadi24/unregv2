<?php
	include 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CodePen - DataTables Template</title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/boots-trap/3.3.6/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
	<link rel="stylesheet" href="./style.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
	<div class="container-fluid">
		<div class="align-items-center mt-2 ml-2 mb-1">
			<form action="index.php" method="post">
	  			<div class="row">
					<div class="col-lg-6">
	  				MSISDN: <input type="text" class="form-control" name="msisdn" minlength="10" maxlength="13" required placeholder="6281xxxxxxxxx">
	  				</div>
					<div class="col-lg-6">
						<input type="submit" class="btn btn-primary m-4">
	  				</div>
	  			</div>
  			</form><br>
		</div>
		<table id="example" class="table table-striped table-bordered container-fluid" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Msisdn</th>
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
						if ($no_hp !=NULL){
							echo "<tr>
							<td>" . $no_hp . "</td>
							<td> Masuk List Unreg Masal </td>
							</tr>";
						}else{
							echo "<tr>
							<td></td>
							<td> Masuk List Unreg Masal </td>
							</tr>";
						}
							
						
				}
				
			}else {
				$msisdn = null;
				echo "no username supplied";
			}
			?>
		</tbody>
	</table>
	</div>

	<!-- partial:index.partial.html -->
	<!-- <a class="btn btn-success" style="float:left;margin-right:20px;" href="https://codepen.io/collection/XKgNLN/" target="_blank">Other examples on Codepen</a> -->
	

	<!-- partial -->
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.0/jquery.min.js'></script>
	<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
	<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
	<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
	<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
	<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
	<script src="./script.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>

</body>

</html>