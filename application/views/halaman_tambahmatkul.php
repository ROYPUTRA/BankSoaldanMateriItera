    <div class="container">
        <div class="lp-page" id="lp-1">
            <div id="lp-1-prodi" class="title">
                <h4>Tambah Mata Kuliah</h4>
            </div>
            <div style="clear: both;"></div>
            <div id="form-addmateri" class="form-input">
                <?php echo  form_open_multipart('welcome/addmatkul');?>
                    <div id="alert">
                    <?php if(validation_errors()): ?>
                        <h4><?php echo validation_errors(); ?></h4>
                    <?php endif; ?>
                    </div>
                    <div class="visible-form">
                        <h3>Kode Mata Kuliah</h3>
                        <input type="text" name="kode_matkul" placeholder="Masukkan kode mata kuliah"><br>
                        <h3>Nama Mata Kuliah</h3>
                        <input type="text" name="nama_matkul" placeholder="Masukkan nama mata kuliah"></br>
                        <h3>Nama Dosen Pengampu</h3>
                        <input type="text" name="nama_dosen" placeholder="Masukkan nama dosen pengampu mata kuliah"></br>
                    </div>
                    
                    <input type="text" name="kode_prodi" value="<?php echo $prodi['kode_prodi']?>" hidden>
                    <div class="form-submit">
                        <input type="reset" value="Reset" id="reset">
                        <input type="submit" value="Simpan" id="submit">
                    </div>
                <?php echo form_close(); ?>
            </div>    
        </div>
    </div>

</body>
</html>