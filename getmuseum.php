<?php
    $query = "SELECT * FROM museum";
    $result = mysqli_query_($connection,$query);
    if (!$result)
    {
        die("database query failed. ");
    }

    while ($row = mysqli_fetch_assoc($result))
    {
        var_dump($row);
        echo $row . "<br>";
    }

    mysqli_free_result($result);

?>    