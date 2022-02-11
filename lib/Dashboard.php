<?php

require_once 'Database.php';

class Dashboard {
    
    public static function getProducts() {
        $db = Database::getInstance();

        $sql = "SELECT * FROM products;";
        $products = $db->find($sql);

        return $products;
    }
    public static function getContacts() {
        $db = Database::getInstance();

        $sql = "SELECT * FROM contacts;";
        $contacts = $db->find($sql);

        return $contacts;
    }

    public static function getTeam() {
        $db = Database::getInstance();

        $sql = "SELECT * FROM team;";
        $team = $db->find($sql);

        return $team;
    }
    public static function getSlider() {
        $db = Database::getInstance();

        $sql = "SELECT * FROM productslider;";
        $slider = $db->find($sql);

        return $slider;
    }

    static $users = [];

    public static function getUsers() {
        if(static::$users) {
            return static::$users;
        }

        $db = Database::getInstance();

        $sql = "SELECT * FROM users;";
        static::$users = $db->find($sql);

        return static::$users;
    }

    /**
     * Returns a specific User by ID
     */
    public static function getUserById($id) {
        $users = static::getUsers();
        foreach($users as $user) {
            if($user['id'] === $id) {
                return $user;
            }
        }
        return false;
    }

}