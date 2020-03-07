<?php

require_once 'app/init.php';

    // $produk1 = new Komik("One Piece", "Eiichiro Oda", "Shounen Jump", 25000, 100);
    // $produk2 = new Game("Mobile Legend", "Ryan", "Moontoon", 250000, 50);

    // $cetakProduk = new CetakInfoProduk();
    // $cetakProduk->tambahProduk( $produk1 );
    // $cetakProduk->tambahProduk( $produk2 );
    // echo $cetakProduk->cetak();
    // echo "<hr>";

    use app\Service\User as ServiceUser;
    use app\Produk\User as ProdukUser;
    
    new ServiceUser();
    echo "<br>";
    new ProdukUser();

?>