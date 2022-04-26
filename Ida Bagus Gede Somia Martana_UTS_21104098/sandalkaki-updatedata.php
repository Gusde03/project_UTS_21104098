<?php

    include_once("koneksidb.php");
    $KodeSandal = "1919";
    $NamaPembeli = "Komang";
    $sql = "UPDATE Penjualan_Sandal SET NamaPembeli='$NamaPembeli' WHERE KodeSandal='$KodeSandal';";

    $hsl = mysqli_query($cnn,$sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }