<?php

require_once "Auth.php";
require_once "Database.php";

class Products {

    /**
     * 
     */
    public static function create($data) {
        $db = Database::getInstance();

        if(!isset($data['foto']) || !isset($data['titulli']) || !isset($data['teksti'])) {
            return false;            
        }

        $foto = $data['foto'];
        $titulli = $data['titulli'];
        $teksti = $data['teksti'];

        $sql = "INSERT INTO products SET foto = '$foto', iduser = '" . $_SESSION['user']['id'] . "', titulli= '$titulli', teksti= '$teksti';";

        $result = $db->query($sql); 

        return $result;
    }
    public static function createslider($data) {
        $db = Database::getInstance();

        if(!isset($data['foto']) || !isset($data['text']) || !isset($data['idslider'])) {
            return false;            
        }

        $foto = $data['foto'];
        $text = $data['text'];
        $idslider = $data['idslider'];

        $sql = "INSERT INTO productslider SET foto = '$foto', text= '$text', idslider= '$idslider';";

        $result = $db->query($sql);

        return $result;
    }

    /**
     * Deletes specific Place by ID
     */
    public static function delete($id) {
        $db = Database::getInstance();

        $sql = "DELETE FROM products WHERE idproduct = {$id}";
        $result = $db->query($sql);

        return $result;
    }
    public static function deleteSlider($id) {
        $db = Database::getInstance();

        $sql = "DELETE FROM productslider WHERE idslider = {$id}";
        $result = $db->query($sql);

        return $result;
    }

}