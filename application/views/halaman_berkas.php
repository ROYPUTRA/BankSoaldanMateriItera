    <div class="lp-page" id="lp-1	">
        <div id="lp-1-berkas">
        	<?php foreach ($matkul as $value) { ?>
            <h4><?php echo $value['nama_matkul']?></h4>
            <a href="<?php echo base_url('edit/matakuliah/'.$value["kode_matkul"])?>">Edit</a>
        	<?php } ?>
        </div>
        <div id="lp-1-deskripsi">
        	<?php foreach ($matkul as $value) { ?>
	        <h2>Dosen</h2>
	        <h2><?php echo $value['nama_dosen']?></h2>
            <?php } ?>
        </div>
    	<div id="lp-1-prodi-pilihberkas">
           	<a href="<?php echo base_url('materi/'.$value["kode_matkul"])?>"><h2>Materi</h2></a>
           	<a href="<?php echo base_url('soal/'.$value["kode_matkul"])?>"><h2>Soal</h2></a>
           	<a href="<?php echo base_url('video/'.$value["kode_matkul"])?>"><h2>Video</h2></a>
        </div>
    </div>

</body>
</html>
