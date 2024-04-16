<?php

    require_once('../model/Url.php');
    $url = new Url();
    $url_corto = $_GET['url_corto'];
    
    $sql_delete = $url->deleteUrl($url_corto);

    if($sql_delete){
        header('location: ../index.php');
    }
?>