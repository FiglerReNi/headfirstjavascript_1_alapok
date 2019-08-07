<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>House Finder</title>
    <link rel="stylesheet" href="house_search.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="house_search.js"></script>
</head>
<body>
<?php
require_once 'kapcs.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "SELECT * FROM house_for_sale WHERE id = '$id'";
    $result = mysqli_query($kapcs, $query);
    $row = mysqli_fetch_row($result);
    $address = $row[4] . ' ' . $row[1];
}
?>
<div class="container">
    <h1>The selected house</h1>
    <br>
    <fieldset class="border border-dark p-4">
        <div id="row">
            <div class="column">
                <img id="kep" src="letöltés.jpg" height="120px" width="40px"/>
            </div>
            <div class="column">
                <label class="col-4 col-sm-4">Address: </label>
                <label class="col-6 col-sm-6"><?= "$address" ?></label>
                <div class='w-100'></div>
                <label class="col-4 col-sm-4">Bedrooms: </label>
                <label class="col-6 col-sm-6"><?= "$row[2]" ?></label>
                <div class='w-100'></div>
                <label class="col-4 col-sm-4">Price: </label>
                <label class="col-6 col-sm-6"><?= "$row[3]" ?></label>
            </div>
        </div>
    </fieldset>
</div>
</body>