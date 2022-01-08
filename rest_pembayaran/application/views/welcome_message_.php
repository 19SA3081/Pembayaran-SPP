<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Pengumuman</title>

	<style type="text/css">
		@font-face {
			font-family: 'Cabin';
			font-style: normal;
			font-weight: 200;
			src: local('Cabin Regular'), local('Cabin-Regular'), url(aset/font/satu.woff) format('woff');
		}

		@font-face {
			font-family: 'Cabin';
			font-style: normal;
			font-weight: 350;
			src: local('Cabin Bold'), local('Cabin-Bold'), url(aset/font/dua.woff) format('woff');
		}

		@font-face {
			font-family: 'Lobster';
			font-style: normal;
			font-weight: 200;
			src: local('Lobster'), url(aset/font/tiga.woff) format('woff');
		}
	</style>
	<link rel="stylesheet" href="aset/css/bootstrap.css" media="screen">

</head>

<body>

	<div class="col-lg-2">
		<table width="40%" class="table-form">
			<tbody>

				<?php
				$alamat = base_url('gambar/upload/');
				$cboAsal = "";
				//$q_klas	= $this->db->query("SELECT * FROM pengumuman order by waktuinput desc")->result();

				if (!empty($data)) {
					foreach ($data as $qa) {
						echo "
					<tr>
						<td height='35px'>
							<b>$qa->judulpengumuman</b>
						</td>
					</tr>
					<tr>
						<td>
							$qa->isipengumuman
						</td>
					</tr>
					<tr>
						<td>
							<img alt='' style='display: inline; float: left; margin-right: 1px; width: 100%; '  src='" . base_url() . "gambar/upload/" . $qa->gambar . "   '>
						</tr>
					";
					}
				}

				?>
			</tbody>
		</table>
	</div>
</body>

</html>