<!DOCTYPE html>
<html>
<head>
	<title>Pencarian CCTV</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<link rel="shortcut icon" type="image/png" href="assets/images/favicon.png">
</head>
<body>
	<h1 class="text-center">Pencarian CCTV</h1>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-12">
				<form id="kata_kunci" method="POST" action="cari.php" class="form-inline">
					<div class="form-group mb-2">
						<input autofocus="" class="form-control kata_kunci" type="text" name="kata_kunci">
					</div>
					<button type="submit" class="btn btn-primary mx-3 mb-2">Cari</button>
				</form>
			</div>
			<div class="col-sm-12">
				<div class="card">
					<div class="card-header">Hasil Pencarian untuk : </div>
					<div class="card-body">
						<table class="table table-hover">
							<thead>
								<tr>
									<th>#</th>
									<th>IP ADDRESS</th>
									<th>CAMERA NAME</th>
									<th>NVR NUMBER</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td><a target="_blank" href="//172.21.3.113">172.21.3.113</a></td>
									<td>Pub In 01</td>
									<td><a target="_blank" href="//172.21.1.204">172.21.1.204</a></td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>

<script type="text/javascript" src="assets/js/jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$('#kata_kunci').submit(function(event) {
			event.preventDefault();
			$.ajax({
				url: 'cari.php',
				method: 'POST',
				data: {
					kata_kunci : $('.kata_kunci').val()
				},
				success: function(response) {
					console.log(response)
				}
			})
		})
	});
</script>
</body>
</html>