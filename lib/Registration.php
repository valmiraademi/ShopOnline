<?php
require_once "Database.php";

class Registration
{
    public static function signup($data)
    {
        $db = Database::getInstance();

        if (!isset($data['name']) || !isset($data['email']) || !isset($data['password'])) {
            return false;
        }

        $name = $data['name'];
        $email = $data['email'];
        $password = $data['password'];

        $sql = "INSERT INTO users SET name = '$name', email = '$email', password = '$password';";
        $result = $db->query($sql);

        return $result;
    }





    /**
     * 
     */
    public static function create($data)
    {
        $db = Database::getInstance();

        if (!isset($data['bio']) || !isset($data['name']) || !isset($data['foto'])) {
            return false;
        }

        $foto = $data['foto'];
        $name = $data['name'];
        $position = $data['position'];
        $bio = $data['bio'];

        $sql = "INSERT INTO team SET name = '$name', position= '$position', bio= '$bio', foto= '$foto';";

        $result = $db->query($sql);

        return $result;
    }

    /**
     * Deletes specific Place by ID
     */
    public static function delete($id)
    {
        $db = Database::getInstance();

        $sql = "DELETE FROM products WHERE idproduct = {$id}";
        $result = $db->query($sql);

        return $result;
    }
    public static function deleteteam($id)
    {
        $db = Database::getInstance();

        $sql = "DELETE FROM team WHERE idteam = {$id}";
        $result = $db->query($sql);

        return $result;
    }
}
