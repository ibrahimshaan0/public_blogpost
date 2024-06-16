<?php

session_start();
if (!isset($_SESSION['status'])) {
    header("Location: login.php");
}

require "db_connection.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Web Programming Lab - Dashboard</title>
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
                    <a href="logout.php">
                        <li>Logout</li>
                    </a>
                </ul>
            </nav>
        </div>
    </header>
    <div class="main-cont">
        <div>
            <h1>
                My Dashboard
                <hr>
            </h1>
        </div>
    </div>
    <div class="blogs">
        <h2>
            My Blogs
            <a href="add-blog.php">
                <span>
                    <img src="assets/imgs/12180762.png" alt="" title="edit">
                </span>
            </a>
        </h2>
        <?php
        $result = mysqli_query($db, "SELECT * FROM blogs");
        while ($row = mysqli_fetch_array($result)) :
        ?>
            <div class="blog">
                <div class="blog-thumbnail">
                    <img src="<?php echo $row["img"]; ?>" alt="">

                </div>
                <div class="blog-title">
                    <h2>
                        <?php
                        echo $row["title"];
                        ?>
                        <a href="update.php?id=<?php echo $row['id'] ?>">
                            <span>
                                <img src="assets/imgs/pencil_2280557.png" alt="" title="edit">
                            </span>
                        </a>
                        <a href="delete.php?id=<?php echo $row['id'] ?>">
                            <span>
                                <img src="assets/imgs/trash_5136805.png" alt="" title="delete">
                            </span>
                        </a>
                    </h2>
                </div>
                <div class="blog-desc">
                    <p>
                        <?php
                        echo $row["description"];
                        ?>
                    </p>
                </div>
                <div class="blog-publisher">
                    <p>
                        <?php
                        echo $row["author"];
                        ?>
                    </p>
                </div>
            </div>
        <?php
        endwhile;
        ?>
    </div>
</body>

</html>