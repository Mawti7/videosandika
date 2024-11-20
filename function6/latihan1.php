<!-- date -->
 <?php
    //  Date untuk menampilkan tanggal dengan format tertentu
    //echo date("L,d-M-Y");

    //time
     //detik yang sudah berlalu 
     //echo time();
 //echo date("d M Y",time()+60*60*24*100);

 //mktime
 //membuat sendiri detik
 //mktime(0,0,0,0,0,0)
 //jam,menit,detik,bulan,tanggal,tahun


// strtotime
 echo date("L", strtotime("25 aug 1985"));
?>