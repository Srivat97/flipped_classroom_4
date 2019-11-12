<?php
    $query = "SELECT * FROM museum";
    $result = mysqli_query_($connection,$query);
    if (!$result)
    {
        die("database query failed. ");
    }

    while ($row = mysqli_fetch_assoc($result))
    {
        echo"<option value='" . $single_row['musname'] . "'>" . $single_row['musname'] . "</option>";
    }

    mysqli_free_result($result);

?>    