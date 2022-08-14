<?php
session_start();

$conn = mysqli_connect(
  'db_host',
  'crub_user',
  'mypsfeguser',
  'crub_db'
) or die(mysqli_erro($mysqli));

?>
