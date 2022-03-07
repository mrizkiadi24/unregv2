<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>CodePen - DataTables Template</title>
	<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css'>
	<link rel='stylesheet' href='https://cdn.datatables.net/buttons/1.2.2/css/buttons.bootstrap.min.css'>
	<link rel="stylesheet" href="./style.css">

</head>

<body>
	<!-- partial:index.partial.html -->
	<!-- <a class="btn btn-success" style="float:left;margin-right:20px;" href="https://codepen.io/collection/XKgNLN/" target="_blank">Other examples on Codepen</a> -->
	<form action="index.php" method="post">
		msisdn: <input type="text" name="msisdn" minlength="10" maxlength="13" required placeholder="6281xxxxxxxxx">
		<input type="submit">
		<input type="hidden" name="session" value="searching">
	</form><br>
	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>b_msisdn</th>
				<th>b.area</th>
				<th>b.regional</th>
				<th>b.cluster</th>
				<th>b.flag_los</th>
				<th>b.freq_nik</th>
				<th>b.rev_all_mtd</th>
				<th>b.total_payload_mtd</th>
			</tr>
		</thead>
		<tbody>
			<?php
			include 'conn.php';
			if (isset($_POST["msisdn"])) {
				$msisdn = $_POST["msisdn"];
				$query = "select * from search_msisdn where b_msisdn = $msisdn";
				$unreg = mysqli_query($conn, $query);
				while ($row = mysqli_fetch_array($unreg)) {
					echo "<tr>
            <td>" . $row['b_msisdn'] . "</td>
            <td>" . $row['b_area'] . "</td>
            <td>" . $row['b_regional'] . "</td>
            <td>" . $row['b_cluster'] . "</td>
            <td>" . $row['b_flag_los'] . "</td>
            <td>" . $row['b_freq_nik'] . "</td>
            <td>" . $row['b_rev_all_mtd'] . "</td>
            <td>" . $row['b_total_payload_mtd'] . "</td>
        </tr>";
				}
			} else {
				$msisdn = null;
				echo "no username supplied";
			}
			?>
		</tbody>
	</table>
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

</body>

</html>