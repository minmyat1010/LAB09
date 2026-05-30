<?php
    require_once"settings.php";
    $dbconn = @mysqli_connect($host,$user,$pwd,$sql_db);
    if(dbconn)
        {
            $query = "SELECT * FROM students";
            $result = mysqli_query ($dbconn, $query);
            if ($result){while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['first_name'] . "</td>";
    echo "<td>" . $row['last_name'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
    echo "<td>" . $row['email'] . "</td>";
    echo "</tr>";
}
  }
            else{}

            mysqli_close($dbconn, $query);

        }
        else
            echo"<p> unable to connect </p>";
?>