<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <meta name="login-page" content="Login Page in PHP">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style1.css">
    <title>Login page!</title>
</head>
<body>
    <header>
        <nav>
            <a href="#">
                <img src="imagine/logo" alt="LOGO IOANA">
            </a>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#">Portfolio</a></li>
                <li><a href="#">About Me</a></li>
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
            <div>
            <?php
                if(isset($_SESSION['userId'])) {
                    echo '<form action="includes/logout.inc.php" method="post">
                            <button type="submit" name="logout-submit">Logout</button>
                          </form>';
                }
                else {
                    echo '<form action="includes/login.inc.php" method="post">
                            <input type="text" name="mailuid" placeholder="Username/E-mail...">
                            <input type="password" name="pwd" placeholder="Password...">
                            <button type="submit" name="login-submit">Login</button>
                          </form>
                          <a href="signup.php">Signup</a>';
                }
            ?>  
            </div>
    </header>

