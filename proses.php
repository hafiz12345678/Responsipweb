<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESPONSI</title>
    <link rel="stylesheet" href="responsi1.css">
</head>
<body>
    <nav>
        <div class="wrapper">
            <div class="logo"><a href=''>WEBSITEKU</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">MAKANAN</a></li>
                    <li><a href="ordermakanan.php">ORDER MAKANAN</li>
                 
                </ul>
            </div>
        </div>
    </nav>
        <?php 

            $nama       = $_POST['nama'];
            $nohp     = $_POST['nohp'];
            $status     = $_POST['status'];
            $jum      = $_POST['jum'];
            $jk      = $_POST['jk'];
            $komentar   = $_POST['komentar'];

            echo "<head><title>My Guest Book</head></title>"; 
            $fp = fopen("guestbook.txt","a+"); 
            fputs($fp,"$nama|$nohp|$status|$jum|$jk|$komentar\n"); 
            fclose($fp); 

            echo "Terima Kasih Atas Partisipasi Anda Mengisi Buku Tamu<br>"; 
            echo "<a href=bukutamu.php> Isi Buku Tamu </a><br>"; 
            echo "<a href=lihat.php> Lihat Buku Tamu </a><br>"; 
        ?>
    </body>
</html>