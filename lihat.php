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
            <div class="logo"><a href=''>lIST ORDER</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">MAKANAN</a></li>
                    <li><a href="ordermakanan.php">ORDER MAKANAN</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <?php 
            echo "<head><title>My Guest Book</title></head>"; 
            $fp = fopen("guestbook.txt","r"); 
            echo "<table border=0>"; 

            while ($isi = fgets($fp,80)) { 
                $pisah = explode("|",$isi); 
                echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>"; 
                echo "<tr><td>No Hp </td><td>: $pisah[1]</td></tr>";
                echo "<tr><td>Menu  </td><td>: $pisah[2]</td></tr>";
                echo "<tr><td>Jumlah Pesanan </td><td>: $pisah[3]</td></tr>"; 
                echo "<tr><td>Minuman </td><td>: $pisah[4]</td></tr>"; 
                echo "<tr><td>Alamat </td><td>: $pisah[5]</td></tr> 
                <tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>"; 
            } 

            echo "</table>"; 
            echo "<a href=bukutamu.php> Klik Disini </a>Isi Form Buku Tamu"; 
        ?> 
    </body>
</html>