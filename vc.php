<?php

    //connection to db*************

    $vc = $_GET['vc'];
    $sql = "update user_tbl set status = '1'  , vc = '' where vc = '$vc'";
    
?>