<div class="lp-page" id="lp-1">
        <div id="lp-1-prodi">
            <?php foreach ($matkul as $value) { ?>
            <h4>Soal latihan <?php echo $value['nama_matkul']?></h4>
            <?php } ?>
        </div>
        <div style="clear: both;"></div>

        <!-- tombol batal -->
        <div id="lp-1-hapusmateri">
            <a href="<?php echo base_url('soal/'.$kode_matkul) ?>" id="batal"><h3>Batal</h3></a>
        </div>

        <form method="post" action="<?php echo base_url('welcome/hapussoal/'.$kode_matkul) ?>">

            <!-- tombol hapus -->
            <div id="lp-1-hapusmateri">
            <input type="submit" id="hapus" value="Hapus soal terpilih" onclick="return confirm('yakin ingin hapus?')">
            </div>
            <div style="clear: both;"></div>

            <div id="lp-1-prodi-matkul">
           	<?php foreach ($soal as $value) { ?>
        		<a href="<?php echo base_url('assets/soal/'.$value["file"])?>"><h2><?php echo $value["judul"] ?></h2></a>
                <input type="checkbox" name="pilih[]" value="<?php echo $value["kode_soal"];?>">
        	<?php } ?>
        </div>
        </form>
</div>
