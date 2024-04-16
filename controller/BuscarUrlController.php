<?php

    require_once('../model/Url.php');
    $url = new Url();

    if(isset($_POST['search'])){
        $url_select = $url->buscarUrl($_POST['search']);
        $output = "";
        if(!empty($url_select)){
            foreach ($url_select as $value) {
                $output .= '
                    <tr>
                        <td>
                            <a href="./index.php?url='.$value['url_corto'].'" target="_black">
                                localhost/proyectosPHP/AcortadorLink/index.php?url='.$value['url_corto'].'
                            </a>
                        </td>
                        <td>
                            '.substr($value['url_original'], 0, 50).'....
                        </td>
                        <td>
                            '.$value['click'].'
                        </td>
                        <td>
                            <a class="button" href="./controller/ElimiNarUrlController.php?url_corto='.$value['url_corto'].'";><i class="ri-delete-bin-line"></i></a>
                        </td>
                    </tr>
                ';
            }
        }
        echo $output;
    }else{
        echo "no  hay url";
    }

?>