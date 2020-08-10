<?php

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
	header()
	print "<div class='product'>";
        print "<form name='i_view' method='POST'>";
        print "<select name='c_image'>";
        print "<option value='../image'>Product Image</option>";
        print "</select>";
        print "<input type='submit' name='d_image' value='Get Selected Values' />";
        print "</form>";

	
	$s_inp = $_POST['c_image'];

        if($s_inp)
        {


                if(isset($_POST['d_image']))
                {
                        system('ls ' . $s_inp);


                }




        }





        print "</div>";

}


elseif($_SESSION['login_user'] != 'administrator')
{
        echo "Only administrator user can access admin panel!";
        $url = "../index.php";
        echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">';

}


?>
