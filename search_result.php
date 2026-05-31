<?php
require_once("setting.php");

if (!isset($_GET['model'])) {
    die("Please search from search_form.php");
}

$model = mysqli_real_escape_string($dbconn, $_GET['model']);

$query = "SELECT car_id, make, model, price, yom FROM cars WHERE model LIKE '%$model%'";
$result = mysqli_query($dbconn, $query);

if ($result && mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr>
            <th>Car ID</th>
            <th>Make</th>
            <th>Model</th>
            <th>Price</th>
            <th>YOM</th>
          </tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['car_id'] . "</td>";
        echo "<td>" . $row['make'] . "</td>";
        echo "<td>" . $row['model'] . "</td>";
        echo "<td>" . $row['price'] . "</td>";
        echo "<td>" . $row['yom'] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No cars found.";
}

mysqli_close($dbconn);
?>