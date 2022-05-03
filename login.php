<?php
include 'session_details.php';

if ($logged_in) {
    header('Location: account.php');
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user_email = $_POST['email'];
    $user_pass = $_POST['password'];
    if ($user_email == $email && $user_pass == $pass) {
        login();
        header('Location: account.php');
        exit;
    }
}
include 'header.php';
?>

<h3>This will be the login page</h3>
<form method="POST" action="login.php">
    <div>
        <label for="username">Email:</label><input type="text" name="email">
    </div>
    <div>
        <label for="password">Password:</label><input type="password" name="password">
    </div>
    <input type="submit" value="Log in">
</form>
<?php
include 'footer.php';
?>