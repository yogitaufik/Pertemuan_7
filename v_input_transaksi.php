<!DOCTYPE html>
<html>
<head>
	<title>Transaksi Toko Sepatu</title>
</head>

<body>
	<center>
		<form action="<?= base_url('tokosepatu/cetak'); ?>" method="post">
			<table>
				<tr>
					<th colspan="3">
						Form Input Transaksi Toko Sepatu
					</th>
				</tr>
				<tr>
					<td colspan="3">
						<hr>
					</td>
				</tr>
				<tr>
					<th>Nama Pembeli</th>
					<th>:</th>
					<td>
						<input type="text" name="nama" id="nama">
						<?= form_error('nama', '<br> <span style="color:red;">', '</span>'); ?>
					</td>
				</tr>
				<tr>
					<th>Nomor HP</th>
					<td>:</td>
					<td>
						<input type="text" name="nomor" id="nomor">
						<?= form_error('nomor', '<br> <span style="color:red;">', '</span>'); ?>
					</td>
				</tr>
				<tr>
					<th>Merk Sepatu</th>
					<td>:</td>
					<td>
						<select name="merk" id="merk"></select>
						<option>-- Pilih Merk --</option>
						<option value="Nike">Nike</option>
						<option value="Adidas">Adidas</option>
						<option value="Kickers">Kickers</option>
						<option value="Eiger">Eiger</option>
						<option value="Bucherri">Bucherri</option>
					</td>
				</tr>

				<tr>
					<th>Ukuran Sepatu</th>
					<td>:</td>
					<td>
						<select name="ukuran" id="ukuran">
							<option>-- Pilih Ukuran --</option>
							<?php for($i = 32; $i <= 44; $i++) : ?>
								<option value="<?= $i; ?>"><?= $i; ?></option>
							<?php endfor; ?>
						</select>	
					</td>
				</tr>
				<tr>
					<td colspan="3" align="center">
						<hr>
						<button type="submit" class="btn btn-primary">Simpan</button>
					</td>
				</tr>
			</table>
		</form>
	</center>
</body>
