<?php

if (isset($_POST['kata_kunci'])) {
	$kata_kunci = $_POST['kata_kunci'];

	$konek = mysqli_connect('localhost', 'root', '', 'cctv');

	if ($konek) {
		$query = mysqli_query($konek, "SELECT * FROM cctv WHERE ip_address LIKE \"%$kata_kunci%\" OR nvr LIKE \"%$kata_kunci%\" OR camera_name LIKE \"%$kata_kunci%\"");
		foreach ($query as $data) {
			echo $data['ip_address'];
		}
	}else{
		echo "connection_lost";
	}
}else{
	echo "tidak_ada_kata_kunci";
}

