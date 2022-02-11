<?php

define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASSWORD", "");
define("DB_DATABASE", "shoponline");

class Database {

    // DB Connection
    protected $db = null;  

    // Object Instance
    protected static $instance = null; 


    public function __construct() {
        $this->connect();
    }

    public static function getInstance() {
        if(static::$instance !== null) {
            return static::$instance;
        }

        static::$instance = new Database();
        return static::$instance;
    }


    protected function db()
    {
        return $this->connect();
    }

    protected function connect()
    {
        if($this->db !== null)  {
            return $this->db;
        }

        $this->db = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE);
        if ($this->db->connect_errno) {
          echo "Failed to connect to MySQL: " . $this->db->connect_error;
          exit();
        }
        return $this->db;
    }

    public function query($sql) {
        return $this->db()->query($sql);
    }

    public function find($sql) {
        $res = [];
        $query = $this->query($sql);
        while($row = $query->fetch_assoc()) {
            $res[] = $row;
        }
        $query->free_result();

        return $res;
    }

    public function close() {
        $this->db()->close();
        $this->db = null;
    }

}