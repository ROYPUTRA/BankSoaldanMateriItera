<div class="lp-page" id="lp-1">
        <div id="lp-1-prodi">
            <?php foreach ($matkul as $value) { ?>
            <h4>Video referensi <?php echo $value['nama_matkul']?></h4>
            <?php } ?>
        </div>
        <div style="clear: both;"></div>

        <!-- tombol batal -->
        <div id="lp-1-hapusmateri">
            <a href="<?php echo base_url() ?>index.php/welcome/video/<?php echo $kode_matkul; ?>" id="batal"><h3>Batal</h3></a>
        </div>

        <form method="post" action="<?php echo base_url() ?>index.php/welcome/hapusvideo/<?php echo $kode_matkul; ?>">

            <!-- tombol hapus -->
            <div id="lp-1-hapusmateri">
            <input type="submit" id="hapus" value="Hapus video terpilih" onclick="return confirm('yakin ingin hapus?')">
            </div>
            <div style="clear: both;"></div>

            <div id="lp-1-prodi-matkul">
            <?php foreach($video as $value) {?>
            <div id="videohapus">
                <div id="v-video">
                <iframe src="https://www.youtube.com/embed/<?php echo $value['link'] ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" style="border-radius: 10%;" allowfullscreen></iframe>
                <h3><?php echo $value['judul'] ?></h3>
                </div>
            </div>
            <input type="checkbox" name="pilih[]" value="<?php echo $value["kode_video"];?>">
            <?php } ?>

        </div>
        </form>
</div>
