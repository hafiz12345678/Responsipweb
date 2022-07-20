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
            <div class="logo"><a href=''>TOKO MAKANAN</a></div>
            <div class="menu">
                <ul>
                    <li><a href="index.php">MAKANAN</a></li>
                    <li><a href="ordermakanan.php">ORDER MAKANAN</a></li>
                </ul>
            </div>
        </div>
    </nav>
        <div align="center">
            <strong>
            <font size="6" face="Courier New, Courier, mono">Order Pesanan Disini</font>
            </strong>
        </div><br>

        <form name="form1" method="post" action="proses.php">
            <table width="58%" border="0" align="center">
                <tr>
                    <td>Nama : </td>
                    <td><input name="nama" type="text" id="nama"></td>
                </tr>
                <tr>
                    <td>No Hp : </td>
                    <td><input name="nohp" type="text" id="nohp"></td>
                </tr>
                <tr>
                    <td>Pesanan</td>
                    <td><select name="status" id="status">
                        <option value="Nasi Goreng Ayam">Nasi Goreng Ayam</option>
                        <option value="Nasi Goreng Telor">Nasi Goreng Telor Dadar</option> 
                        <option value="Nasi Goreng Seafood">Nasi Goreng Seafood</option>
                    </select></td>
                </tr>
                <tr>
                    <td>Jumlah Pesanan : </td>
                    <td><input name="jum" type="text" id="jum"></td>
                </tr>
                 <tr>
                    <td>Minuman</td>
                    <td><input type='radio' name='jk' id="jk" value='es teh'  />es teh
                        <input type='radio' name='jk' id="jk" value='lemon tea' />lemon tea</td>
                </tr>
                <tr>
                    <td>Alamat : </td>
                    <td><textarea name="komentar" id="komentar"></textarea></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="Submit" value="Kirim">
                    <input type="reset" name="Submit2" value="Batal"</td>
                </tr>
            </table>
        </form>
        <div  align="center">
            <strong><a  href="lihat.php">::Lihat  Buku Pesanan:: </a></strong>
        </div> 
    </body>
</html>