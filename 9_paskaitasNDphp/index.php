<?php

function getVolume($x,$y = 3,$z = 1.5) {
	$v = $x * $y * $z;
	return round($v, 1);
}
function getTrucks($x,$y) {
	$vnt = $x / $y ;
	return ceil($vnt);
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
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
								<th class="text-center" colspan='2'>Autocisternų kiekis</th>
							</tr>
							<tr>
								<th class="text-center" >Ilgis (m.)</th>
								<th class="text-center" >Plotis (m.)</th>
								<th class="text-center" >Gylis (m.)</th>
								<th class="text-center" >Tūris (m3)</th>
								<th class="text-center" >10 (m3)</th>
								<th class="text-center" >30 (m3)</th>
							</tr>
						</thead>
						<tbody>
							<?php 
					
							for ($r = 1; $r < 51; $r++) { 
								$v = getVolume($r);
								$T1 = getTrucks($v,10);
								$T2 = getTrucks($v,30);
								echo "<tr id='$r'><td>$r</td><td>3</td><td>1.5</td><td>$v</td><td>$T1 vnt</td><td>$T2 vnt</td></tr>";
							}
							?>
						</tbody>
				</table>
			</div>
		</div>
	</div>
</body> 
</html>