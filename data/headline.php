<?php
  date_default_timezone_set('Asia/Jakarta');
   function tglIndonesia($indo_tgl){
      $tr   = trim($indo_tgl);
      $indo_tgl    = str_replace(array('Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'), array('Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jum\'at', 'Sabtu', 'Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'), $tr);
      return $indo_tgl;
  }
  echo "<span style='font-weight: bold; color: #000000; background-color: #ffffff; padding-left:10px; padding-right:10px'>" . tglIndonesia(date('D, d F Y - h:i:s')) . "</span>";
?>
