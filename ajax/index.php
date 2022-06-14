<?php 
    require('function.php');

    // start here //

    if ( isset($_POST['segment']) &&  $_GET['segment'] == 'cek_connection') {
        echo cek_connection();
    }
?>