<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <?php
    session_start();
    if(isset($_SESSION['email'])){
        // User is already logged in
        echo "Hello, " . $_SESSION['email'] . "!";
        echo "<form action='server.php' method='post'>
                <input type='submit' name='logout' value='Logout'>
            </form>";
    } else {
        if (isset($_SESSION['login_error_message'])) {
            echo "<p style='color: red;'>".$_SESSION['login_error_message']."</p>";
            unset($_SESSION['login_error_message']);
        }
        echo "<form action='server.php' method='post'>
                <label for='username'>Username:</label>
                <input type='text' name='username' id='username' required><br>
                <label for='password'>Password:</label>
                <input type='password' name='password' id='password' required><br>
                <input type='submit' name='login' value='Login'>
            </form>";
    }
    ?>
</body>
</html>
