<?php

    require_once('./model/Url.php');
    $url = new Url();
    if(isset($_GET['url'])){
        $sql_select = $url->buscarUrlCorto($_GET['url']);
        
        if(!empty($sql_select)){
            $clickAux = 0;
            foreach ($sql_select as $value) {
                $clickAux = $value['click'] + 1;
                header('location: '.$value['url_original']);
            }
        }
        $sql_update = $url->updateUrlClick($clickAux, $_GET['url']);
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <link
        href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css"
        rel="stylesheet"
    />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nanum+Gothic&display=swap" rel="stylesheet">

    <title>Document</title>
</head>
<body>
    <section class="container">
        <div class="acortador__container">
            <h1 class="acortador__title">Acortador de Links</h1>
            <div class="acortador-error"></div>
            <div class="acortador__option">
                <form class="option__guardar" action="#" method="POST">
                    <i class="ri-link"></i>
                    <input type="text" placeholder="https://www.youtube.com" name="url">
                    <button type="submit" class="button">Guardar</button>
                </form>
            </div>
            <div class="container__search">
                <i class="ri-search-line"></i>
                <input type="text" placeholder="Buscar link">
            </div>
            <div class="acortador__date">
                <table class="acortador__table">
                    <thead>
                        <tr>
                            <th>Link Corto</th>
                            <th>Link original</th>
                            <th>Click</th>
                            <th>Opcion</th>
                        </tr>
                    </thead>
                    <tbody class="wrapper">
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <script src="script.js"></script>
</body>
</html>

<!--$_COOKIE


<tr>
                            <td>
                                <a href="#">Localhost/proyectoPHP/AcortadorLink/345345</a>
                            </td>
                            <td>
                                https://www.youtube.com/a23asd
                            </td>
                            <td>
                                2
                            </td>
                            <td>
                                <button class="button"><i class="ri-delete-bin-line"></i></button>
                            </td>
                        </tr>