<?php 

 $server = "localhost";
 $user = "root";
 $password = " ";
 $nama_database = "db_melinda";

 $koneksi = mysqli_connect("localhost","root");

 if ( !$koneksi){
      die("Gagal terhubung dengan database :" .mysqli_connect_error());
 }

?>