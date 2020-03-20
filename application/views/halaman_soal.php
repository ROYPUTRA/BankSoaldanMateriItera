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
        	<?php foreach ($matkul as $value) { ?>
        	<h4>Soal latihan <?php echo $value['nama_matkul']?></h4>
        	<?php } ?>
        </div>
        <div id="operasi">
            <div id="lp-1-cari">
            	<input type="text" name="cari" id="cari" placeholder="ketik kata kunci pencarian"></input>
            <select id="selecttipe">
                <option>Tipe</option>
                <option>UTS</option>
                <option>UAS</option>
                <option>KUIS</option>
            </select>
            <select id="selecttahun">
                <option>Tahun</option>
                <option>2015</option>
                <option>2016</option>
                <option>2017</option>
                <option>2018</option>
                <option>2019</option>
                <option>2020</option>
                <option>2021</option>

            </select>
            </div>
        </div>
        <div style="clear: both;"></div>
        <div id="lp-1-tambahmateri">
            <a href="<?php echo base_url()?>/index.php/welcome/tampilansoal/<?php echo $value["kode_matkul"]?>"><h3>Tambah soal</h3></a>
        </div>
    	<div id="lp-1-prodi-matkul">
           	<?php foreach ($soal as $value) { ?>
        		<a href="<?php echo base_url()?>/assets/soal/<?php echo $value["file"]?>"><h2><?php echo $value["judul"] ?></h2></a>
        	<?php } ?>
        </div>
    </div>

    <input id="kode_matkul" value="<?php foreach ($matkul as $value){ echo $value['kode_matkul']; }?>" hidden>

	<input id="alamat1" value="<?php echo base_url() ?>index.php/welcome/tipesoal/" hidden>
    
    <input id="alamat2" value="<?php echo base_url() ?>index.php/welcome/tahunsoal/" hidden>

    <input id="alamat" value="<?php echo base_url() ?>index.php/welcome/hasilcarisoal/" hidden>
	<script src="<?php echo base_url() ?>/assets/ajax/ajaxcarisoal.js"></script>
</body>
</html>