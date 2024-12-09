<?php
include_once 'config/database.php';
include_once 'Modelos/usuarios.php';

class Controlador {
    private $db;
    private $user;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
        $this->user = new User($this->db);
    }

    public function login($username, $password) {
        $this->user->username = $username;
        $this->user->password = $password;

        if($this->user->login()) {
            session_start();
            $_SESSION['username'] = $this->user->username;
            header("Location: index.php?action=panel");
        } else {
            header("Location: index.php?action=login");
            echo "Error";
        }
    }

    public function register($username, $password, $email) {
        $this->user->username = $username;
        $this->user->password = password_hash($password, PASSWORD_BCRYPT);
        $this->user->email = $email;

        if($this->user->register()) {
            echo "<p>Registro exitoso. ...</p>";
            header("Refresh: 3; url=index.php?action=login");
            exit();
        } else {
            echo "Registration failed.";
        }
    }

    public function logout() {
        session_start();
        session_destroy();
        header("Location: index.php?action=login");
    }
}
?>

