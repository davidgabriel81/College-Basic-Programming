<?php

if($_POST){
    $nama=$_POST["nama_txt"];
    $tanggal=$_POST["tanggal_txt"];
    echo $nama;
    echo $tanggal;
    echo "nama saya ".$nama. "tanggal lahir " .$tanggal;
}

?>