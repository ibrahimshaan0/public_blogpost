<?php

session_start();
// $_SESSION["status"] = "";

if (isset($_SESSION['status'])) {
    header("Location: dashboard.php");
}


require "db_connection.php";

if (isset($_POST["submit"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $usernameError = "";
    $passwordError = "";

    $fetchUsername = "";
    $fetchPassword = "";

    $result = mysqli_query($db, "SELECT * FROM admininfo");
    while ($row = mysqli_fetch_array($result)) {
        $fetchUsername = $row["username"];
        $fetchPassword = $row["password"];
        if (!strcmp($username, $fetchUsername) && !strcmp($password, $fetchPassword)) {
            break;
        }
    }

    if ($username == "" || $username == " ") {
        $usernameError = "Username is empty! Please enter a valid username.";
    } else if (strcmp($username, $fetchUsername)) {
        $usernameError = "Username didn't matched";
    } else {
        $usernameError = "";
    }

    if ($password == "" || $password == " ") {
        $passwordError = "Password is empty! Please enter a valid password.";
    } else if (strlen($password) < 8) {
        $passwordError = "Password must be at least 8 characters long.";
    } else if (strcmp($password, $fetchPassword)) {
        $passwordError = "Password didn't matched";
    } else {
        $passwordError = "";
    }

    if ($usernameError == "" && $passwordError == "") {
        $_SESSION["status"] = "Loggedin";
        header("Location: dashboard.php");
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web Programming Lab - Project</title>
</head>

<body>
    <header>
        <div class="logo">
            <h2>Website Logo</h2>
        </div>
        <div class="navbar">
            <nav>
                <ul>
                    <a href="index.php">
                        <li>Home</li>
                    </a>
                    <a href="#">
                        <li>Shop</li>
                    </a>
                    <a href="#">
                        <li>About</li>
                    </a>
                    <a href="#">
                        <li>Contact</li>
                    </a>
                    <a href="dashboard.php">
                        <li>Dashboard</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div class="form-area">
            <form action="" method="post">
                <h2>Login</h2>
                <span class="error-message">
                    <?php
                    if (isset($_POST["submit"])) {
                        echo $usernameError;
                    }
                    ?>
                </span>
                <input type="text" name="username" placeholder="Username" autocomplete="on">
                <span class="error-message">
                    <?php
                    if (isset($_POST["submit"])) {
                        echo $passwordError;
                    }
                    ?>
                </span>
                <input type="password" name="password" placeholder="Password" autocomplete="on">
                <div class="login-btn">
                    <input type="submit" name="submit" value="Login">
                </div>
            </form>
        </div>
    </section>
</body>

</html>