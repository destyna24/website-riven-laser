<?php
include('koneksi_msql.php');
if(!$_SESSION['login']) {
    header("location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include_once('head_admin.php');
    
include_once('contentAdmin.php');


include_once('footer_admin.php'); ?>
</footer>
