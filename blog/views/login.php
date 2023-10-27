<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    if (isset($_GET['error']) && $_GET['error'] == 1) {
        echo "<p>Login failed. Please try again.</p>";
    }
    ?>
    <form method="POST" action="login/login">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</body>
</html>
