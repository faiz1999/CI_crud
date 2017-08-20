<a href="<?=site_url('buku/add'); ?>"><button class="btn" style="margin-bottom: 8px;margin-top: 10px;">Add</button></a>
<table class="cg" border="1">
	<tr>
		<th>No.</th>
		<th>Nama Buku</th>
		<th>Pengarang</th>
		<th>Tahun terbit</th>
		<th></th>
	</tr>
	<?php 
		$no = 1;
		foreach ($buku as $b => $row) {
	?>
	<tr>
		<td><?=$no++;?></td>
		<td><?=$row->nama_buku;?></td>
		<td><?=$row->pengarang;?></td>
		<td><?=$row->thn_terbit;?></td>
		<td>
			<a href="<?=site_url('buku/edit/'.$row->id_buku);?>"><button class="btn">Edit</button></a>
			<a href="<?=site_url('buku/del/'.$row->id_buku);?>" onclick="return confirm('Apa anda yakin ingin menghapus data ini?')"><button class="btn">Hapus</button></a>
		</td>
	</tr>
	<?php
		}
	?>
	
</table>