<!DOCTYPE html>
<html>
<head>
	<title>Dashboard</title>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<h2 class="judul">Tambah pegawai</h2>
			<form method="post" action="proses.php">
				<div class="form-group">
					<label for="foto">Foto</label>
					<div class="input"><input type="file" id="foto"></div>
				</div>
				<div class="form-group">
					<label for="nama">Nama</label>
					<div class="input"><input type="text" name="nama" id="nama"></div>
				</div>
				<div class="form-group">
					<label for="jk">Jenis Kelamin</label>
					<input type="radio" name="jk" id="jk" value="L"> Laki-laki
					<input type="radio" name="jk" id="jk" value="P"> Perempuan
				</div>
				<div class="form-group">
					<label for="tanggal">Tanggal</label>
					<div class="input"><input type="date" name="tanggal" id="tanggal"></div>
				</div>
				<div class="form-group">
					<label for="jabatan">Jabatan</label>
					<div class="input">
						<select id="jabatan">
							<option value="direktur">Direktur</option>
							<option value="manajer">Manajer</option>
							<option value="marketing">Marketin</option>
							<option value="sekretaris">Sekretaris</option>
						</select>
					</div>
				</div>
				<div class="form-group">
					<input type="submit" name="simpan" value="Simpan" class="tombol simpan">
					<input type="reset" value="Batal" name="batal" class="tombol reset">
				</div>
			</form>

</body>
</html>