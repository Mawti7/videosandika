<?php
// pertemuan 2 - php dasar
// sintaks php
// komentar untuk 1 baris
/* 
komentar untuk banyak baris
*/
// standar output
// echo,print(untuk mencetak tulisan dan isi variabel)
// print_r utnuk mencetak isi array
//var_dump melihat isi variabel

// penulisan sintaks php
// 1. php didalam html
// 2. html di dalam php
// variabel dan tipe data
//variabel
//tidak boleh diawali angka tapi boleh mengandung angka
//operator
//aritmatika
//+ - * / %
// $x = 10;
// $y =20;
// echo $x * $y;
// penggabung string / concatination / concat
// .
//$nama_depan="gita";
//$nama_belakang="nurma";
 //echo $nama_depan . " " . $nama_belakang;

 // Assignment
 //yaitu operator penugasan ,=,+=,*=,/=,%=,.=
 // $x = 1;
 // $x +5= 5;
 //echo $x;
 // $nama .= "gita"
//  $nama .= " ";
//  $nama .= "nurma"

// perbandingan
// <,>,<=,>=,==,!=
//var_dump (1 > 5);
 
// identitas
// ===,!==
//var_dump(1 === "1")

//logika
//&& ,||,!
// $x = 30;
//var_dump($x < 20 && $x % 2 == 0)
 $nama= "nurma";

 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
 </head>
 <body>
    <h1>Halo, Selamat Datang <?php echo $nama ; ?></h1>
    <p><? echo "ini adalah paragraf"?></p>
    <?php 
    echo "<h1>Halo, Selamat Datang Nurma</h1>"
    ?>
 </body>
 </html>
 
 
