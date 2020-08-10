<?php
require("config.php");
session_start();


if($_SESSION['userid'] == 1)
{

        $query = "SELECT username,email FROM users";
        $r = mysqli_query($conn, $query);
        echo '<section class="search-filters">';
        echo '<label>Admin Features</label>';
        echo '</section>';
        while($row = mysqli_fetch_array($r))
        {      /*
                echo "<div class='product'>";

                echo "<table>";
                echo "<td>" . $row['username'] . "</td>";
                echo $row['email'];
                echo "</table>";
                echo "</div>";
	 */
	}
}
?>
