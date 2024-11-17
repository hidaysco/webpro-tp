<?php 
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = isset($_POST['name']) ? trim($_POST['name']):'';
    echo empty($name) ? 'Nama tidak boleh kosong!': 'Halo, '.$name.'! Selamat datang di AJAX';
  }else{
    echo 'ERROR';
  }
?>