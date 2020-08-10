<?php
session_start();
include("config.php");

?>

<html>
<head>
<title>
ADMIN PANEL
</title>

<link rel="stylesheet" href="/css/admin_panel.css">
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>
<body>
<nav class="navbar navbar-default navbar-static-top">
    <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle navbar-toggle-sidebar collapsed">
			MENU
			</button>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				Administrator
			</a>
		</div>

<?php
if($_SESSION['userid'] == 1)
{
	
	

	
	print "<ul class='nav navbar-nav navbar-right'>";
	
	print "<li class='dropdown '>";
	print "<a href='../welcome.php' class='dropdown-toggle' data-toggle='dropdown' role='button' aria-expanded='false'> Account";
						
	
	
	
	

	print "</li>";
	print "</ul>";
	print "</div><!-- /.navbar-collapse -->";
	print "</div><!-- /.container-fluid -->";
	print "</nav>";
	print "<div class='container-fluid main-container'>";
  	print "<div class='col-md-2 sidebar'>";
  	print "<div class='row'>";
	print "<div class='absolute-wrapper'> </div>";

	
	print "<div class='side-menu'>";
	print "<nav class='navbar navbar-default' role='navigation'>";
		
	print "<div class='side-menu-container'>";
	print "<ul class='nav navbar-nav'>";
	print "<li class='active'><a href='#'><span class='glyphicon glyphicon-dashboard'></span> Dashboard</a></li>";
	print "<li><a href='../index.php'><span class='glyphicon glyphicon-plane'></span>Home</a></li>";

	print "<div id='dropdown-lvl1' class='panel-collapse collapse'>";
	print "<div class='panel-body'>";
	print "<ul class='nav navbar-nav'>";
	

	
	print "<li class='panel panel-default' id='dropdown'>";
	print "<a data-toggle='collapse' href='#dropdown-lvl2'>";
	print "<span class='glyphicon glyphicon-off'></span> Sub Level <span class='caret'></span>";
	print "</a>";
	print "<div id='dropdown-lvl2' class='panel-collapse collapse'>";
	print "<div class='panel-body'>";

	print "</div>";
	print "</div>";
	print "</li>";
	print "</ul>";
	print "</div>";
	print "</div>";
	print "</li>";

	print "</ul>";
	print "</div><!-- /.navbar-collapse -->";
	print "</nav>";

	print "</div>";
	print "</div>";
	print "</div>";
  	print "<div class='col-md-10 content'>";
  	print "<div class='panel panel-default'>"; 
	print "<div class='panel-heading'>Dashboard";
	print "</div>";
	print "<div class='panel-body'>";
	
        print "<form name='i_view' method='POST'>";
        print "<select name='c_image'>";
        print "<option value='../image'>Product Image</option>";
        print "</select>";
        print "<input type='submit' name='d_image' value='Get Selected Values' /
>";
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
  	print "</div>";
  	print "<footer class='pull-left footer'>";
  	print "<p class='col-md-12'>";
  	print "<hr class='divider'>";
  		
  	print "</p>";
  	print "</footer>";
	print "</div>";
}

elseif($_SESSION['login_user'] != 'administrator') 
{

	echo "Only administrator user can access admin panel!";
        $url = "../index.php";
        echo '<META HTTP-EQUIV=Refresh CONTENT="3; URL='.$url.'">';
}
?>
<!--
<div class="topnav">
<a class="active" href="../index.php">Home</a>
</div>
-->

<footer class="product">
</div>


</body>


</html>
