<?php
require "db_connection.php";
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
    <div class="main-cont">
        <div>
            <h1>
                My Website Title
            </h1>
        </div>
        <p>
            <strong>Description:</strong> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi temporibus ducimus ut magnam voluptatum similique illum perspiciatis laborum est modi, adipisci corporis dolor eum magni quod hic nostrum veniam aspernatur debitis accusantium, quaerat fugiat eveniet voluptatibus eaque. Debitis, saepe, ea nam cupiditate neque, vitae voluptatibus earum exercitationem autem labore possimus.
        </p>
    </div>
    <div class="blogs">
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