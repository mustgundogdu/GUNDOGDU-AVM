<?php


$conn = mysqli_connect('localhost', 'yolgezer', 'g1b3kc4t', 'gundogdu_avm');

if(!$conn)
{
        die("Connection Failed");
}
session_start();
$errors = [];
$user = $_SESSION['login_user'];
$email = $_POST['mail'];
$localIP = $_SERVER['HTTP_HOST'];

if ($email)

{
        $query = "UPDATE users SET email='$email' WHERE username='$user'";

        if(mysqli_query($conn, $query))
        {

                $msg = "Email Change Successfully";
                header("Location: http://$localIP/message.php?email_success=$msg");


        }
}




?>

