<?php
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $date = $_POST['date'];
    $date = date('j F Y', strtotime($date));
    echo "Tanggal lahir: ".$date;
    echo "<br/>Hobi: ";
    echo isset($_POST['hobbies']) ? implode(', ',$_POST['hobbies']) : "-";
  }
?>