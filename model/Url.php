<?php
    
    require_once('Conectar.php');
    class Url{

        private $db;

        public function __construct() {
            $conectar = new Conectar();
            $this->db = $conectar->conexion;
        }

        function GuardarUrl($url_corto, $url_original, $click){
            $query = "
            INSERT INTO `url`(`url_corto`, `url_original`, `click`) 
            VALUES ('{$url_corto}','{$url_original}','{$click}');
            ";

            $resultado = mysqli_query($this->db, $query);

            if($resultado){
                return true;
            }else{
                return false;
            }
        }

        function SeleccionarTodos(){

            $file = [];

            $query = "
                SELECT * FROM url;
            ";

            $resultado = mysqli_query($this->db, $query);

            if(mysqli_num_rows($resultado) > 0){
                while($row = mysqli_fetch_array($resultado)){
                    $file[] = $row;
                }
            }

            return $file;
        }

        function buscarUrlCorto($url_corto){

            $file = [];

            $query = "
                SELECT * FROM url WHERE url_corto = '{$url_corto}';
            ";

            $resultado = mysqli_query($this->db, $query);

            if(mysqli_num_rows($resultado) > 0){
                $file[] = mysqli_fetch_assoc($resultado);
            }

            return $file;
        }

        function buscarUrl($url_original){

            $file = [];

            $query = "
                SELECT * FROM url WHERE url_original LIKE '%{$url_original}%';
            ";

            $resultado = mysqli_query($this->db, $query);

            if(mysqli_num_rows($resultado) > 0){
                while($row = mysqli_fetch_array($resultado)){
                    $file[] = $row;
                }
            }

            return $file;
        }

        function deleteUrl($url_corto){ 
            $query = "
                DELETE FROM `url` WHERE url_corto = '{$url_corto}';
            ";

            $resultado = mysqli_query($this->db, $query);

            if($resultado){
                return true;
            }

            return false;
        }

        function updateUrlClick($click, $url_corto){
            $query = "
            UPDATE `url` SET `click`='{$click}' WHERE url_corto = '{$url_corto}';
            ";
            $resultado = mysqli_query($this->db, $query);
        }
    }

?>