<?php

function getVolume($x,$y = 3,$z = 1.5) {
	$v = $x * $y * $z;
	return round($v, 1);
}
function getTrucks($x,$y) {
	$vnt = $x / $y ;
	return ceil($vnt);
}
function kaina($x,$y){
	return $x * $y;
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Namu darbai 9</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">
		<div class="row">
			<h1 class="text-center col">Baseinai ir Autocisternos</h1>
			</div>
		<div class="row">
			<h3 class="text-center col">9 paskaitas. Namų darbai</h3>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<table class="table table-hover table-bordered">
						<thead class="thead-inverse">
							<tr >
								<th class="text-center" colspan='4'>Baseinai</th>
								<th class="text-center" colspan='4'>Autocisternų kiekis</th>
							</tr>
							<tr>
								<th class="text-center" rowspan="2" >Ilgis (m.)</th>
								<th class="text-center" rowspan="2" >Plotis (m.)</th>
								<th class="text-center" rowspan="2" >Gylis (m.)</th>
								<th class="text-center" rowspan="2" >Tūris (m3)</th>
								<th class="text-center" colspan='2'>Baseinai</th>
								<th class="text-center" colspan='2'>Autocisternų kiekis</th>
							</tr>
							<tr>
								
								<th class="text-center" >10 (m3)</th>
								<th class="text-center" >Kaina $</th>
								<th class="text-center" >30 (m3)</th>
								<th class="text-center" >Kaina $</th>
							</tr>
						</thead>
						<tbody>
							<?php 
					
							for ($r = 1; $r <= 50; $r++) { 
								$v = getVolume($r);
								$T1 = getTrucks($v,10);
								$T2 = getTrucks($v,30);
								$T1kaina = kaina($T1,100);
								$T2kaina = kaina($T2,250);
								$class10 = "";
								$class30 = "";
								if ($T1kaina < $T2kaina) {
									$class10 = "table-success";
									$class30 = "table-danger";
								} else {
									$class30 = "table-success";
									$class10 = "table-danger";
								}
								echo "<tr id='$r'>
									<td>$r</td>
									<td>3</td><td>1.5</td>
									<td>$v</td>
									<td>$T1 vnt</td>
									<td class='$class10'>$T1kaina</td>
									<td>$T2 vnt</td>
									<td class='$class30'>$T2kaina</td>
									</tr>";
							}
							?>
						</tbody>
				</table>
			</div>
		</div>
	</div>
</body> 
</html>