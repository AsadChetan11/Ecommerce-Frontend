<?php

function get_dbc() {
   $mysqli = mysqli_connect('localhost', 'root','','dailyshop') or die(mysqli_error($mysqli));

    
    return $mysqli;
}


?>