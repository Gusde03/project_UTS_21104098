<?php
    if(isset($_POST['txKodeSandal'])){
    include_once ("koneksidb.php");
    $KodeSandal =$_POST['txKodeSandal'];
    $JumlahPesanan =$_POST["txJumlahPesanan"];
    $NamaPembeli =$_POST["txNamaPembeli"];
    $Ukuran = $_POST["txUkuran"];
    $Alamat = $_POST["txAlamat"];

    $sql = "INSERT INTO Penjualan_Sandal(KodeSandal,JumlahPesanan,NamaPembeli,Ukuran,Alamat) Values('$KodeSandal','$JumlahPesanan','$NamaPembeli','$Ukuran','$Alamat');";
    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "insert data berhasil<br>";
    }else{
        echo "insert gagal<br>";
    }
}else{
    
    header("location: sandalkaki-insertdatapenjualan.php");
    
   // echo '<script>window.location.href="index.php"</script>';
}

