<?php echo form_open('buku/process', '', array('id' => $buku->id_buku)); ?>

<table>
	<tr>
		<td>Judul Buku</td>
		<td>:</td>
		<td>
			<?php echo form_input('nama_buku', $buku->nama_buku, array('name' => 'nama_buku', 'placeholder' => 'Nama Buku', 'required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Nama Pengarang</td>
		<td>:</td>
		<td>
			<?php echo form_input('pengarang', $buku->pengarang, array('name' => 'pengarang', 'placeholder' => 'Pengarang', 'required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Tahun Terbit</td>
		<td>:</td>
		<td>
			<?php echo form_input(array('value' => $buku->thn_terbit, 'type' =>'number', 'placeholder' => 'Tahun', 'required' => 'required', 'name' => 'tahun')); ?>
		</td>
	</tr>
	<tr>
	    <td>
		    <?php echo form_input(array('type' => 'submit', 'name' => 'edit', 'value' => 'Edit')); ?>
	    </td>
	</tr>
</table>

<?php echo form_close();?>