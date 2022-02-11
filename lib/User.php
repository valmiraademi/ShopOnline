<?php

require_once "Database.php";

class User {

    
    /**
     * Deletes specific User by ID
     */
    public static function delete($id) {
        $db = Database::getInstance();

        $sql = "DELETE FROM users WHERE id = {$id}";
        $result = $db->query($sql);

        return $result;
    }
}