<?php
if(empty(session_id()))
    session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
    exit();
}
else if($_SERVER["REQUEST_METHOD"] === "POST"){
    if(isset($_POST['logout'])){
        $_SESSION = array();
        session_destroy();
        unset($_SESSION);
        header("Location: login.php");
        exit();
    }
}

?>

<?php require 'inc/head.php'; ?>
<form method="post" action="">
    <input type="submit" name="logout" value="Log out">
</form>

<?php require 'inc/foot.php'; ?>