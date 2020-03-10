<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo base_url('assets/css/style.css') ?>">
    <title>Bank Soal dan Materi ITERA</title>
</head>
<body>
    <div class="lp-header">
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
    <div class="lp-page" id="lp-1">
        <div id="lp-1-container">
            <h1>Selamat Datang di Website<br>Bank Soal dan Materi ITERA</h1>
            <h3>Dapatkan soal dan materi program studimu agar bisa menjadi referensi ketika ujian nanti</h3>
            <button onclick="enroll()">Mulai cari referensimu</button>
        </div>
        <img src="<?php echo base_url('assets/img/lp_lampu.png') ?>" alt="Welcome"><!-- Diisi dengan gambar lampu pijar -->
    </div>
    <script>
        function enroll() {
            var enrolkey = prompt("masukkan enrolment key");
            <?php foreach ($enrol as $value) { ?>
                var x = "<?php echo $value['enrol']; ?>"
            <?php } ?>

            if(enrolkey == x){
                document.location.href='<?php base_url() ?>/index.php/Welcome/page_prodi';
            }else{
                window.alert("enrolment key salah !!")
            }
             
        }
    </script>
</body>
</html>