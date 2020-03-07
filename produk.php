<?php

    class Produk{
        public  $judul = "judul", 
                $penulis = "penulis",
                $penerbit = "penerbit",
                $harga = 0;
        
        public function getLabel(){
            return "$this->penulis, $this->penerbit";
        }

    }

    // $produk1 = new Produk();
    // $produk1->judul = "One Piece";
    // var_dump($produk1);

    // $produk2 = new Produk();
    // $produk2->judul = "Counter Strike";
    // $produk2->tambahProperty = "hahaha";
    // var_dump($produk2);

    $produk3 = new Produk();
    $produk3->judul = "One Piece";
    $produk3->penulis = "Eiichiro Oda";
    $produk3->penerbit = "Shounen Jump";
    $produk3->harga = 25000;

    $produk4 = new Produk();
    $produk4->judul = "Mobile Legend";
    $produk4->penulis = "Ryan";
    $produk4->penerbit = "Moontoon";
    $produk4->harga = 250000;

    echo "Komik : " . $produk3->getLabel();
    echo "<br>";
    echo "Game : " . $produk4->getLabel();

?>