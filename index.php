<!-- bagian PHP -->
<?

// luas Persegi ( rumus: sisi x sisi )
define("sisi", 10);
$luasPersegi=sisi*sisi;

// luas segitiga ( rumus: 1/2 x alas x tinggi )
define("alas", 4);
$tinggi=5;
$luasSegitiga=0.5*alas*$tinggi;

// luas trapesium ( rumus: 1/2 x (panjang sisi A + panjang sisi B) x tinggi )
define("panjangSisiA", 5);
define("panjangSisiB", 3);
$tinggi= 2;
$luasTrapesium=0.5*(panjangSisiA+panjangSisiB)*$tinggi;

/* 
luas permukaan tabung
rumus: 2 x luas alas + luas selimut tabung
( 2*phi*jari_jari(jari_jari + tinggi) )
*/
define("phi", 3.14);
$jari_jari=6;
$tinggi=4;
$luasPermukaanTabung=0.5*phi*$jari_jari*($jari_jari+$tinggi);

// luas permukaan bola ( rumus: 4 x phi x jari_jari x jari_jari )
$jari_jari=4;
$luasPermukaanBola=4*phi*$jari_jari**2;

?>
<br><br>
<!-- bagian HTML -->
<!-- menggunakan Bootstrap -->
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>

	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">

	<style type="text/css">
		body{
			font-family: cursive;
		}
	</style>
</head>
<body class="bg-light">
	<div class="container-fluid">
		<div class="row">
			<div class="col col-12 col-lg-4 mb-2">
				<div class="card text-center">
					<div class="card-body bg-danger text-white">
						<p>
							Luas Persegi = <?=$luasPersegi;?> cm2
						</p>
					</div>
				</div>
			</div>

			<div class="col col-12 col-lg-4 mb-2">
				<div class="card text-center">
					<div class="card-body bg bg-success text-white">
						<p>
							Luas Segitiga = <?=$luasSegitiga;?> cm2
						</p>
					</div>
				</div>
			</div>

			<div class="col col-12 col-lg-4 mb-2">
				<div class="card text-center">
					<div class="card-body bg bg-info">
						<p>
							Luas Trapesium = <?=$luasTrapesium;?> cm2
						</p>
					</div>
				</div>
			</div>

			<div class="col col-12 col-lg-6 mb-2">
				<div class="card text-center">
					<div class="card-body  bg bg-warning">
						<p>
							Luas Permukaan Tabung = <?=$luasPermukaanTabung;?> cm2
						</p>
					</div>
				</div>
			</div>

			<div class="col col-12 col-lg-6 mb-2">
				<div class="card text-center">
					<div class="card-body bg bg-primary text-white">
						<p>
							Luas Permukaan Bola = <?=$luasPermukaanBola;?> cm2
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>