    <div class="lp-page" id="lp-1	">
        <div id="lp-1-prodi">
        	<?php foreach ($matkul as $value) { ?>
        	<h4>Upload Materi <?php echo $value['nama_matkul']?></h4>
        	<?php } ?>
        </div>
        <div style="clear: both;"></div>
        <div id="form-addmateri">
            <?php echo  form_open_multipart('welcome/addmateri');?>
                <input type="text" name="kode_matkul" value="<?php echo $value['kode_matkul']?>" hidden>
                <h3>Judul materi <?php echo $value["nama_matkul"];?></h3>
                <div id="alert">
                <?php if(validation_errors()): ?>
                    <h4><?php echo validation_errors(); ?></h4>
                <?php endif; ?>
                </div>
                <input type="text" name="judul_materi" id="judul_materi" placeholder="isi judul materi"></br>
                <div class="dropzone-wrapper">
                    <div class="dropzone-desc">
                     <p>Choose an file or drag it here.</p>
                    </div>
                    <input type="file" name="File" class="dropzone">
                </div>
                <input type="reset" value="reset">
                <input type="submit" value="simpan">
                <div style="clear: both;"></div>
            <?php echo form_close(); ?>
        </div>    
    </div>

</body>
</html>

