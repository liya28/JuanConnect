<?php
session_start();
include('db.php');

if (!isset($_SESSION['id'])) {
    header('Location: page-login.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin Panel</title>
    <link rel="shortcut icon" href="logo_dumlog.png">
    <style>
        html {
            background-color: white;
        }
    </style>
</head>

<frameset rows="80%,5.5%" frameborder="0">
    <frameset cols="20%,80%">
        <frame src="modules.php" name="FraLink">
        <frame src="Communication/dashboard.php" name="FraDisplay">
    </frameset>
    <frame src="footer.php" name="FraFooter">
</frameset>

</html>
