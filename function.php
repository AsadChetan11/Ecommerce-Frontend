<?php
session_start();

function get_dbc() {
    $mysqli = mysqli_connect('localhost', 'root','','dailyshop') or die(mysqli_error($mysqli));
    

}


function save($con,$tablename,$data){
    $firstarray = array();
    $first1array = array();
    foreach($data as $key => $value){
        $firstarray[] = $key;
        $first1array[] = $value;
    }
   // print_r($firstarray);
   // print_r($first1array);
    $col = "`".implode("`, `",$firstarray)."`";
    $val = "'".implode("', '",$first1array)."'";
   echo $sql = "INSERT INTO $tablename ($col)
VALUES ($val)";


return $sql;

}




?>