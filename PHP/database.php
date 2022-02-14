<?php
    function set_string($db, $input) {
        $input = mysqli_real_escape_string($db, trim($input));
        return $input;
    }

    define('DB_USER', 'socially_admin');
    define('DB_PASSWORD', 'Aniy070393@2');
    define('DB_HOST', 'localhost');
    define('DB_NAME', 'socially_project_request');

    $db_connect = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
        OR die('Could not connect to MySQL: '. mysqli_connect_error());
    mysqli_set_charset($db, 'utf8');
?>
