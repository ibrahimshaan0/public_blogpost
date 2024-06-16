<?php

session_start();
// $_SESSION["status"] = "";

require "db_connection.php";

if (isset($_POST["add"])) {
    $insetionStatus = "";
    $title = $_POST["blog-title"];
    $description = $_POST["description"];
    $author = $_POST["author"];
    $imgName = $_FILES["blog-thumb"]["name"];
    $imgPath = "assets/imgs/" . "$imgName";

    $titleError = "";
    $descriptionError = "";
    $authorError = "";


    if ($title == "" || $title == " ") {
        $titleError = "Title is empty! Please enter a valid title.";
    } else {
        $titleError = "";
    }

    if ($description == "" || $description == " ") {
        $descriptionError = "Description is empty! Please enter a valid description.";
    } else {
        $descriptionError = "";
    }

    if ($author == "" || $author == " ") {
        $authorError = "Author name is empty! Please enter an author name.";
    } else {
        $authorError = "";
    }

    $temp = $_FILES["blog-thumb"]["tmp_name"];
    if (!file_exists($imgPath)) {
        if (move_uploaded_file($temp, $imgPath)) {
            $upload_status = "Upload Done";
        }
    }

    if ($imgName == "") {
        $imgPath = "assets/imgs/default.jpg";
    }


    if ($titleError == "" && $descriptionError == "" && $authorError == "") {
        $query = mysqli_query($db, "INSERT INTO blogs(title,description,author,img) VALUES('$title','$description','$author','$imgPath')");
        if ($query) {
            $insetionStatus = "Data Inserted Sucessfully!";
        } else {
            $insetionStatus = "Failed to insert Data.";
        }
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
            <form action="" method="post" enctype="multipart/form-data">
                <h2>Add Product</h2>
                <h3>
                    <span class="error-message">
                        <?php
                        if (isset($_POST["add"])) {
                            echo $insetionStatus;
                        }
                        ?>
                </h3>
                </span>
                <span class="error-message">
                    <?php
                    if (isset($_POST["add"])) {
                        echo $titleError;
                    }
                    ?>
                </span>
                <input type="text" name="blog-title" placeholder="Blog Title">
                <span class="error-message">
                    <?php
                    if (isset($_POST["add"])) {
                        echo $descriptionError;
                    }
                    ?>
                </span>
                <textarea type="text" name="description" placeholder="Description"></textarea>
                <span class="error-message">
                    <?php
                    if (isset($_POST["add"])) {
                        echo $authorError;
                    }
                    ?>
                </span>
                <input type="text" name="author" placeholder="Author Name">

                <input type="file" name="blog-thumb" placeholder="Select Blog Thumbnail" accept=".jpg,.png,.jpeg,.gif,.tiff,.webp">
                <div class="login-btn">
                    <input type="submit" name="add" value="Add Blog">
                </div>
            </form>
        </div>
    </section>
</body>

</html>