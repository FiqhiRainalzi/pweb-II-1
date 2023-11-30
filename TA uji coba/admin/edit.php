<h3>EDIT DATA PESANAN</h3>

<?php
include 'koneksi.php';
$id_transaksi = $_GET['id_transaksi'];
$data = mysqli_query($koneksi, "select * from transaksi where id_transaksi='$id_transaksi'");
while ($d = mysqli_fetch_array($data)) {
?>
	<form method="post" action="update.php">
		<table>
			<tr>
				<td>Nama</td>
				<td>
					<input type="hidden" name="id_transaksi" value="<?php echo $d['id_transaksi']; ?>">
					<input  type="text" name="nama" value="<?php echo $d['nama'];?>">
				</td>
			</tr>
			<tr>
				<td>Tanggal Pesanan</td>
				<td><input type="date" name="tgl_pesan" value="<?php echo $d['tgl_pesan']; ?>"></td>
			</tr>

			<tr>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<td>
								<label class=" col-form-label">Jenis Sepatu</label>
								<select  name="jenis_sepatu" class="form-select" aria-label="Default select example">
									<option <?php if ($d['jenis_sepatu'] == 'Sneakers')
												echo 'selected' ?> value="Sneakers">Sneakers</option>
									<option <?php if ($d['jenis_sepatu'] == 'Flat Shoes')
												echo 'selected' ?> value="Flat Shoes">Flat Shoes</option>
									<option <?php if ($d['jenis_sepatu'] == 'Slip On')
												echo 'selected' ?> value="Slip On">Slip On</option>
									<option <?php if ($d['jenis_sepatu'] == 'Boots')
												echo 'selected' ?> value="Boots">Boots</option>
								</select>
							</td>
						</div>
					</div>
				</div>
			</tr>
			<tr>
				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<td>
								<label class=" col-form-label">Jenis Service</label>
								<select  name="jenis_service" class="form-select" aria-label="Default select example">
									<option <?php if ($d['jenis_service'] == 'Regular Clean')
												echo 'selected' ?> value="Regular Clean">Regular Clean</option>
									<option <?php if ($d['jenis_service'] == 'Deep Clean')
												echo 'selected' ?> value="Deep Clean">Deep Clean</option>
									<option <?php if ($d['jenis_service'] == 'Unyellowing')
												echo 'selected' ?> value="Unyellowing">Unyellowing</option>
									<option <?php if ($d['jenis_service'] == 'Kid Shoes')
												echo 'selected' ?> value="Kid Shoes">Kid Shoes</option>
								</select>
							</td>
						</div>
					</div>
				</div>
				</td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea  type="text" name="alamat" value=""><?php echo $d['alamat']; ?></textarea>
			</tr>
			<tr>
				<td><label class=" col-form-label">Status</label>
					<select name="status" class="form-select" aria-label="Default select example">
						<option <?php if ($d['status'] == 'sedang dijemput')
									echo 'selected' ?> value="sedang dijemput">sedang dijemput</option>
						<option <?php if ($d['status'] == 'proses pencucian')
									echo 'selected' ?> value="proses pencucian">proses pencucian</option>
						<option <?php if ($d['status'] == 'selesai')
									echo 'selected' ?> value="selesai">selesai</option>
						<option <?php if ($d['status'] == 'Sedang Diantar')
									echo 'selected' ?> value="Sedang Diantar">Sedang Diantar</option>
					</select>
				</td>
			</tr>
			<tr>

				<td></td>
				<td><input class="btn btn-primary" type="submit" value="SIMPAN"></td>
			</tr>
		</table>
	</form>
<?php
}
?>