<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>House Finder - Matches</title>
    <link rel="stylesheet" href="house_search.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="house_search.js"></script>
</head>
<body>
<div class="container">
    <h1>The following houses were found</h1>
    <br>
    <fieldset class="border border-dark p-4">
        <div class='row'>
        <?php
        require_once 'kapcs.php';
        if (isset($_POST['shop'])) {
            $income = mysqli_real_escape_string($kapcs, trim($_POST['income']));
            $bedroom = mysqli_real_escape_string($kapcs, trim($_POST['bedroom']));
            $zip = mysqli_real_escape_string($kapcs, trim($_POST['zip']));
            $price = $income*4;
            $query = "SELECT * FROM house_for_sale WHERE zip = '$zip'  AND bedroom = '$bedroom' AND price <= '$price'";
            $result = mysqli_query($kapcs, $query);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_array($result)) {
                    $cim = $row['address'];
                    $id = $row['id'];
                     echo '<div class="col-3 col-sm-3">' . $cim . '</div>';
                     echo '<button class="col-1 col-sm-1, btn btn-info"><a style="color:white" href="house_view.php?id=' . $id .'">View</a></button>';
                     echo '<div class="w-100"></div>' ;
                }
            } else {
              echo '<script type="text/javascript">alert("Sajnos egyetlen ingatlan sem felel meg a keresésnek.");
                    window.close("house_search.php");
                    window.open("house_search.html")</script>';
            }
        }
        ?>
        </div>
    </fieldset>
</div>
</body>
