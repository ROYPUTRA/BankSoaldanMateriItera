<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>Bank Soal dan Materi ITERA</title>
</head>
<body>
    <div class="lp-header" id="home">
        <div class="header-logo">
            <!-- Diisi dengan logo ITERA dan Tulisan BSMI -->
            <img src="<?php echo base_url('assets/img/header_logo.png') ?>" alt="Bank Soal dan Materi Itera"> 
        </div>
        <div class="lp-navigation">
            <ul>
                <li><a href="#">HOME</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">ABOUT</a></li>
            </ul>
        </div>
    </div>
    <div class="lp-page" id="lp-1	">
        <div id="lp-1-prodi">
        	<!-- foreach ($matkul as $value) { -->
        	    <h4>Tambah Mata Kuliah</h4>
        	<!-- } -->
        </div>
        <div style="clear: both;"></div>
        <div id="form-addmateri">
            <?php echo  form_open_multipart('welcome/addmatkul');?>
                <div id="alert">
                <?php if(validation_errors()): ?>
                    <h4><?php echo validation_errors(); ?></h4>
                <?php endif; ?>
                </div>
                <h3>Kode Mata Kuliah</h3>
                <input type="text" name="kode_matkul" placeholder="Masukkan kode mata kuliah"><br>
                <h3>Nama Mata Kuliah</h3>
                <input type="text" name="nama_matkul" placeholder="Masukkan nama mata kuliah"></br>
                <h3>Nama Dosen Pengampu</h3>
                <input type="text" name="nama_dosen" placeholder="Masukkan nama dosen pengampu mata kuliah"></br>
                <input type="text" name="kode_prodi" value="<?php echo $prodi['kode_prodi']?>" hidden>
                <input type="reset" value="reset">
                <input type="submit" value="simpan">
            <?php echo form_close(); ?>
        </div>    
    </div>

</body>
</html>