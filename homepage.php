<?php
// Initialize the session
session_start();
session_start();
require_once "config.php";

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
else {
    $id = $_SESSION["id"];
    $sql = "SELECT * FROM MEMBER WHERE id=" . $id;
    $result = $link ->query($sql);
    if($result) {
        $row = $result->fetch_array(MYSQLI_ASSOC);
        if ($row['user_type'] == 'student') {
            $_SESSION['message'] = "";
            header('Location: '.$PATH.'/homepage/student.php');
        } elseif ($row['user_type'] == 'librarian') {
            $_SESSION['message'] = "";
            header('Location: '.$PATH.'/homepage/librarian.php');
            exit();
        } else {
            $_SESSION['message']="You are not authorized to view page.";
            header('Location: '.$PATH.'/logout.php');
            exit();
        }
    }

}
?>
