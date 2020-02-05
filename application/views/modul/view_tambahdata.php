<br>
<br>
<br>
<br>
<br>

<h1 align="center">Tambah Data Mahasiswa</h1>
<div class="container">
	<?= $this->session->flashdata('message')?>
	<?= $this->session->flashdata('message1')?>
	<?= $this->session->flashdata('message2')?>
	<form  class="form" action="<?php echo base_url('Myadmin/aksi_tambah_data')?>" method="POST">
		<div class="form-group">
			<label for="npm">NPM :</label>
			<input class="form-control" id="npm" type="number" name="npm" placeholder="Masukan NPM" value="<?= set_value('npm');?>">
			<small class="text-danger"><?php echo form_error('npm'); ?></small>
		</div>
		<div class="form-group">
			<label for="nama">NAMA :</label>
			<input class="form-control" id="nama" type="text" name="nama" placeholder="Masukan Nama" value="<?= set_value('nama');?>">
			<?php echo form_error('nama','<small class="text-danger">','</small>'); ?>
		</div>
		<div class="form-group">
			<label for="semester">SEMESTER :</label>
			<select class="form-control" id="semester" name="semester" value="<?= set_value('semester');?>">
				<option value="">-Pilih Semester-</option>
				<?php for ($i=0; $i < 11 ; $i++) { ?>
				<option value="<?php echo $i; ?>">Semester <?php echo $i; ?></option>
				<?php } ?>
			</select>
			<small class="text-danger"><?php echo form_error('semester'); ?></small>
		</div>
		<div class="form-group" align="center">
			<button class="btn btn-primary" style="width: 100px" type="submit" value="Submit">Simpan</button>
		</div>
	</form>
	<br><br>
	<form>
		
		<table class="table">
			<thead class="thead-dark">
				<th scope="col">No</th>
				<th scope="col">NPM</th>
				<th scope="col">Nama</th>
				<th scope="col">Semester</th>
				<th scope="col">Aksi</th>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach($tampil as $tpl):
				?>
				<tr scope="row">
					<td><?= $no; ?></td>
					<td><?= $tpl->Npm; ?></td>
					<td><?= $tpl->Nama; ?></td>
					<td><?= $tpl->Semester; ?></td>
					<td>
						<a href="<?= site_url("myadmin/editdata/").$tpl->Npm; ?>" class="btn btn-primary">Edit</a>
						<a href="<?= site_url("myadmin/hapus/").$tpl->Npm; ?>" class="btn btn-danger" onclick="return confirm('Data dihapus, yakin?');">Hapus</a>
					</td>
				</tr>
				<?php
				$no++;
				endforeach;
				?>
			</tbody>
		</table>
	</form>
</div>