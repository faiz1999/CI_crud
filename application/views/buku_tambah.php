<?php echo form_open('buku/process'); ?>
<?/* <form action="buku/process" method="post">*/?>

<table>
	<tr>
		<td>Judul Buku</td>
		<td>:</td>
		<td>
			<?php echo form_input('nama_buku', '', array('name' => 'nama_buku', 'placeholder' => 'Nama Buku', 'required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Nama Pengarang</td>
		<td>:</td>
		<td>
			<?php echo form_input('pengarang', '', array('name' => 'pengarang', 'placeholder' => 'Pengarang', 'required' => 'required')); ?>
		</td>
	</tr>
	<tr>
		<td>Tahun Terbit</td>
		<td>:</td>
		<td>
			<?php echo form_input(array('type' =>'number', 'placeholder' => 'Tahun', 'required' => 'required', 'name' => 'tahun')); ?>
		</td>
	</tr>
	<tr>
	    <td>
		    <?php echo form_input(array('type' => 'submit', 'name' => 'add', 'value' => 'Tambah')); ?>
	    </td>
	</tr>
</table>

<?php echo form_close();?>