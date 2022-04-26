<?php
    include_once ("koneksidb.php");
    $KodeSandal ="1919";
    $JumlahPesanan ="3";
    $NamaPembeli ="Gusde";
    $Ukuran ="L";
    $Alamat ="Jalan Kartika 1";

    $sql = "INSERT INTO Penjualan_Sandal(KodeSandal,JumlahPesanan,NamaPembeli,Ukuran,Alamat) Values('$KodeSandal','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "inser gagal<br>";
    }
