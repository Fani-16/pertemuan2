<?php
$nilai = 100;
switch($nilai){
     case $nilai > 100:
          echo "Data Tidak Valid";
          break;
     case $nilai > 70:
          echo "Lulus Ujian Dengan Baik";
          break;
     case $nilai > 60:
          echo "Lulis Ujian Dengan Cukup";
          break;
     case 60:
          echo "Nilai anda D";
          break;
     default:
          echo "Nilai anda E";
          break;
}