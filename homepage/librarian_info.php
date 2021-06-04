<?php
session_start();
include "librarian_header.php";
require_once "../config.php";



$username = htmlspecialchars($_SESSION["username"]);
$res=mysqli_query($link, "SELECT * FROM MEMBER WHERE username = '$username'");
while($row=mysqli_fetch_array($res)) {
    $lastname=$row["LastName"];
    $firstname=$row["FirstName"];
    $address=$row["address"];
    $phone=$row["phone"];
    $email=$row["email"];
}
?>

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3></h3>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>  My Information</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">

                            <table class= "table table-bordered">
                                <tr>
                                    <th scope="row">MemberID </th>
                                    <td><?php echo htmlspecialchars($_SESSION["id"]);?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Username </th>
                                    <td><?php echo htmlspecialchars($_SESSION["username"]);?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Last name </th>
                                    <td><?php echo $lastname; ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">First name </th>
                                    <td><?php echo $firstname; ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Address </th>
                                    <td><?php echo $address; ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Phone </th>
                                    <td><?php echo $phone; ?></td>
                                </tr>

                                <tr>
                                    <th scope="row">Email </th>
                                    <td><?php echo $email; ?></td>
                                </tr>

                            </table>


                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- /page content -->

<?php
include "footer.php";
?>