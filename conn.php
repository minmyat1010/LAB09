<!doctype html>
<html lang = "en">
<head>
    <title>Connection</title>
    <meta charset="utf-8" />
</head>
<body>
    <?php
        require_once "settings.php";
        $conn = @mysqli_connect ($host,$user, $pwd,$sql_db);
        if ($conn)
            {
                echo "<p> Connection successful! </p>";
                 mysqli_close ($conn);
            }
            else
                echo "<p> Connection failed! </p>";
    ?>
       

</body>
</html>