<?php
    require "connection.php";
    function select($sql){
        $dbc = db_connect();
        $result = mysqli_query($dbc,$sql);
        $rows = mysqli_fetch_all($result);
        db_close($dbc);
        return $rows;
    }
?>