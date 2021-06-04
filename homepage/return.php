<?php
require_once "../config.php";

if(isset($_GET[id])) {
    $checkno = $_GET['id'];
}
$a=date("yy/m/d");
$res1=mysqli_query($link, "UPDATE CHECKOUT_STATUS SET Return_date='$a' WHERE CheckNo='$checkno'");
$res2=mysqli_query($link, "UPDATE CHECKOUT_STATUS SET is_returned='yes' WHERE CheckNo='$checkno'");
?>
<script type="text/javascript">
    window.location="return_book.php";
</script>

