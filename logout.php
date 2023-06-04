<?php

include('koneksi_msql.php');
session_destroy();
header("location: login.php");

?>