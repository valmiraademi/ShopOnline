<?php

require_once "Database.php";

class Contact {

    /**
     * 
     */
    public static function create($data) {
        $db = Database::getInstance();

        if(!isset($data['name']) || !isset($data['email']) || !isset($data['message'])) {
            return false;            
        }

        $name = $data['name'];
        $email = $data['email'];
        $phone = $data ['phone'];
        $message = $data['message'];

        $sql = "INSERT INTO contacts (name, email, phone,message) VALUES ('" . $name. "', '" . $email.  "','" . $phone."','" . $message."');";
        $result = $db->query($sql);

        return $result;
    }

    
    /**
     * Deletes specific Contact by ID
     */
    public static function delete($id) {
        $db = Database::getInstance();

        $sql = "DELETE FROM contacts WHERE id = {$id}";
        $result = $db->query($sql);

        return $result;
    }
}