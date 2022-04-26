<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>insert ke tabel penjualan sandal</title>
</head>
<body>
    
    <form method="POST" action="sandalkaki-insertdataform.php">
        Kode Sandal <br>
        <input type="text" name="txKodeSandal"><br>    
        Jumlah Pesanan <br>
        <input type="text" name="txJumlahPesanan"><br>
        Nama Pembeli<br>
        <input type="text" name="txNamaPembeli"><br>
        Ukuran<br>
        <select name="txUkuran">
            <option value="39"> 39 </option>
            <option value="40"> 40 </option>
            <option value="41"> 41 </option>
        </select><br>
        Alamat
        <input type="text" name="txAlamat"><br>
        <br><br>
        <button type=submit> simpan data </button>
    </form>
</body>
</html>