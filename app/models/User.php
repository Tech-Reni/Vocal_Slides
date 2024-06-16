<?php

class User {
    private $db;

    public function __construct() {
        $this->db = (new Database())->connect();
    }

    public function register($username, $password, $email) {
        $password = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)');
        $stmt->execute([$username, $password, $email]);
    }

    public function login($username, $password) {
        $stmt = $this->db->prepare('SELECT * FROM users WHERE username = ?');
        $stmt->execute([$username]);
        $user = $stmt->fetch();

        if ($user && password_verify($password, $user['password'])) {
            // Login logic here
        }
    }
}
