<?php 
    require('config.php');

    // PRE CONFIG
	session_start();
	date_default_timezone_set(DEFAULT_TIME);

    // db connect
    $dbconnect  = mysqli_connect('localhost',DB_USER,DB_PASS,DB_NAME);

    // start here //
        function cek_connection() {
            global $dbconnect;

            $res = mysqli_query($dbconnect,"SELECT * FROM penugasan");

            if($res) {
                $response = array(
                    "status" => '1',
                    "des" => "Berhasil",
                    "data" => null
                );
            } else {
                $response = array(
                    "status" => '0',
                    "des" => "Gagal",
                    "data" => null
                );
            }

            // return $response;
            echo "dada";
        }
?>