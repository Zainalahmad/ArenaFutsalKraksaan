<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

// function tanggal_indonesia: berfungsi untuk menampilkan format tanggal menjadi 13 Oktober 2018
// function tanggal_indonesia_lengkap: berfungsi untuk menampilkan tanggal menjadi Sabtu, 13 Oktober 2018
// function tanggal_indonesia_medium: berfungsi untuk menampilkan tanggal menjadi 13 Okt 2018
// function tanggal_indonesia_pendek: berfungsi untuk menampilkan tanggal menjadi 13/10/2018
// function bulan_panjang: berfungsi untuk menampilkan nama bulan menjadi Oktober
// function bulan_pendek: berfungsi untuk menampilkan nama bulan menjadi Okt
// function bulan_angka: berfungsi untuk menampilkan angka bulan menjadi 10
// function nama_hari: berfungsi untuk menampilkan nama hari Sabtu

if ( ! function_exists('tanggal_indonesia')) {
  function tanggal_indonesia($tanggal) {
    $ubahTanggal = date($tanggal, time()+60*60*8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulan_panjang($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal.' '.$bulan.' '.$tahun;
  }
}
if ( ! function_exists('tanggal_indonesia_lengkap')) {
  function tanggal_indonesia_lengkap($tanggal) {
    $ubahTanggal = date($tanggal, time()+60*60*8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = $pecahTanggal[1];
    $tahun = $pecahTanggal[0];
    $namaHari = nama_hari(date('l', mktime(0, 0, 0, $bulan, $tanggal, $tahun)));
    return $namaHari.', '.$tanggal.' '.bulan_panjang($bulan).' '.$tahun;
  }
}
if ( ! function_exists('tanggal_indonesia_medium')) {
  function tanggal_indonesia_medium($tanggal) {
    $ubahTanggal = date($tanggal, time()+60*60*8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulan_pendek($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal.' '.$bulan.' '.$tahun;
  }
}
if ( ! function_exists('tanggal_indonesia_pendek')) {
  function tanggal_indonesia_pendek($tanggal) {
    $ubahTanggal = date($tanggal, time()+60*60*8);
    $pecahTanggal = explode('-', $ubahTanggal);
    $tanggal = $pecahTanggal[2];
    $bulan = bulan_angka($pecahTanggal[1]);
    $tahun = $pecahTanggal[0];
    return $tanggal.'/'.$bulan.'/'.$tahun;
  }
}
if ( ! function_exists('bulan_panjang')) {
  function bulan_panjang($bulan) {
    switch ($bulan) {
      case 1:
        return 'Januari';
        break;
      case 2:
        return 'Februari';
        break;
      case 3:
        return 'Maret';
        break;
      case 4:
        return 'April';
        break;
      case 5:
        return 'Mei';
        break;
      case 6:
        return 'Juni';
        break;
      case 7:
        return 'Juli';
        break;
      case 8:
        return 'Agustus';
        break;
      case 9:
        return 'September';
        break;
      case 10:
        return 'Oktober';
        break;
      case 11:
        return 'November';
        break;
      case 12:
        return 'Desember';
        break;
    }
  }
}
if ( ! function_exists('bulan_pendek')) {
function bulan_pendek($bulan) {
    switch ($bulan) {
      case 1:
        return 'Jan';
        break;
      case 2:
        return 'Feb';
        break;
      case 3:
        return 'Mar';
        break;
      case 4:
        return 'Apr';
        break;
      case 5:
        return 'Mei';
        break;
      case 6:
        return 'Jun';
        break;
      case 7:
        return 'Jul';
        break;
      case 8:
        return 'Agu';
        break;
      case 9:
        return 'Sep';
        break;
      case 10:
        return 'Okt';
        break;
      case 11:
        return 'Nov';
        break;
      case 12:
        return 'Des';
        break;
    }
  }    
}
if ( ! function_exists('bulan_angka')) {
  function bulan_angka($bulan) {
    switch ($bulan) {
      case 1:
        return '01';
        break;
      case 2:
        return '02';
        break;
      case 3:
        return '03';
        break;
      case 4:
        return '04';
        break;
      case 5:
        return '05';
        break;
      case 6:
        return '06';
        break;
      case 7:
        return '07';
        break;
      case 8:
        return '08';
        break;
      case 9:
        return '09';
        break;
      case 10:
        return '10';
        break;
      case 11:
        return '11';
        break;
      case 12:
        return '12';
        break;
    }
  }
}
if ( ! function_exists('nama_hari')) {
  function nama_hari($hari) {
    if ($hari == 'Sunday') {
      return 'Minggu';
    } elseif ($hari == 'Monday') {
      return 'Senin';
    } elseif ($hari == 'Tuesday') {
      return 'Selasa';
    } elseif ($hari == 'Wednesday') {
      return 'Rabu';
    } elseif ($hari == 'Thursday') {
      return 'Kamis';
    } elseif ($hari == 'Friday') {
      return 'Jumat';
    } elseif ($hari == 'Saturday') {
      return 'Sabtu';
    }
  }
}
?>