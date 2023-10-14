<?php
session_start();

class User {
    public function login($username, $password) {
        if ($username === "johnsmith@gmail.com" && $password === "1234") {
            $_SESSION['email'] = $username;
        } else {
            $_SESSION['login_error_message'] = "Incorrect username or password";
        }
    }

    public function logout() {
        if (isset($_SESSION['email'])) {
            unset($_SESSION['email']);
        }
    }
}

$user = new User();

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $user->login($username, $password);
    header("Location: index.php");
} elseif (isset($_POST['logout'])) {
    $user->logout();
    header("Location: index.php");
}
?>
