<?php
session_start();

require_once 'Database.php';

// Authentication
// Authorization
class Auth
{

    /**
     * returns authenticated user
     */
    public static function user()
    {
        return isset($_SESSION['user']) ? $_SESSION['user'] : null;
    }

    /**
     * checks if user is authenticated 
     */
    public static function isLoggedIn()
    {
        return static::user() !== null;
    }

    /**
     * checks if authenticated user has role "admin"
     */
    public static function isAdmin()
    {
        $user = static::user();
        return ($user && $user['role'] === 'admin');
    }

    /**
     * process user authentication
     */
    public static function login($data)
    {
        $db = Database::getInstance();

        if (!isset($data['email']) || !isset($data['password'])) {
            return false;
        }

        $email = $data['email'];
        $password = $data['password'];

        $sql = "SELECT * FROM users WHERE email = '$email' LIMIT 1;";
        $result = current($db->find($sql));
        if ($result && $result['password'] == $password) {
            unset($result['password']);
            $_SESSION['user'] = $result;
            return true;
        }
        return false;
    }


    public static function showprofile()
    {
        $db = Database::getInstance();
        $sql = " SELECT id, name, email, password, role FROM users WHERE id = '" . $_SESSION['user']['id'] . "'";
        $results = current($db->find($sql));
        return $results;
    }

    public static function edit($id)
    {


        $id = $_POST['id'];
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $role = $_POST['role'];


        $sql = "UPDATE users SET name='$name', email='$email', 
        password='$password', role='$role' WHERE id='$id'";



        $link = mysqli_connect("localhost", "root", "", "shoponline");

        if ($link === false) {
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }

        if (mysqli_query($link, $sql)) {
        } else {
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }

        mysqli_close($link);
    }
}
