<?php
    $query = "SELECT * FROM museum";
    $result = mysqli_query($connection,$query);
    if (!$result)
    {
        die("database query failed. ");
    }

    while ($row = mysqli_fetch_assoc($result))
    {
        echo"<option value='" . $row['musID'] . "'>" . $row['musname'] . "</option>";
    }

    mysqli_free_result($result);

?>    
