<?php
    
    include_once("koneksidb.php");
    $KodeSandal = "1919";
    $sql = "DELETE FROM Penjualan_Sandal WHERE KodeSandal='$KodeSandal';";

    $hsl = mysqli_query($cnn, $sql);

    if($hsl){
        echo "sukses<br>";
    }else{
        echo "gagal";
    }