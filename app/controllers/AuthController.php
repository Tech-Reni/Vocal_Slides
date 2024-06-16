<?php

class AuthController extends Controller {
    public function register() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->model('User');
            $user->register($_POST['username'], $_POST['password'], $_POST['email']);
        }

        $this->view('auth/register');
    }

    public function login() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $user = $this->model('User');
            $user->login($_POST['username'], $_POST['password']);
        }

        $this->view('auth/login');
    }
}
