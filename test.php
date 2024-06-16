<?php
if (isset($_POST["submit"])) {
    $img = "";
    $selectedOption = $_POST["select-items"];
    echo "You selected: $selectedOption";
    echo "<br><br>";
    $img = $_FILES["img"]["name"];
    echo $img;

    $imgPath = "assets/imgs/" . "$img";
    $temp = $_FILES["img"]["tmp_name"];
    if (!file_exists("$imgPath")) {
        move_uploaded_file($temp, $imgPath);
        echo "<br>File Not Exists";
    } else {
        echo "<br>exist";
    }
}



?>

<form action="" method="post" enctype="multipart/form-data">
    <h2>Test From</h2>
    <select name="select-items">
        <option value="none">Selet One</option>
        <option value="First Option">Ibrahim</option>
        <option value="Second Option">IShaan</option>
        <option value="Third Option">Sakila</option>
    </select>
    <br><br>
    <input type="file" name="img">
    <br><br>
    <input type="submit" name="submit" value="Test">
</form>