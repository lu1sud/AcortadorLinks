<?php

    require_once('../model/Url.php');
    $url = new Url();
    $url_original = $_POST['url'];
    $ran_url = substr(md5(microtime()), rand(0, 26), 5);
    if(!empty($url_original)){
        
        $new_url = "".$ran_url;
        $click = 0;
        if(filter_var($url_original, FILTER_VALIDATE_URL)){
            $sql_select1 = $url->buscarUrl($url_original);
            if(empty($sql_select1)){
                $sql_insert2 = $url->GuardarUrl($new_url, $url_original, $click);
                if($sql_insert2){
                    echo "success";
                }
            }else{
                echo  "Esta url ya existe";
            }
        }else{
            echo "Esta url no es valida";
        }
    }else{
        echo "Ingrese una url";
    }

?>