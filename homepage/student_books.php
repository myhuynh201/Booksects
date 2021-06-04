<?php
session_start();
require_once "../config.php";
include "student_header.php";

$username = $_SESSION["username"];
?>

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">

        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>My Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <table class="table table-bordered">
                            <th> 
                                ISBN
                            </th>
                            <th> 
                                Book Name
                            </th>
                            <th> 
                                Checkout Date
                            </th>
                            <th> 
                                Due Date
                            </th>
                            <th> 
                                Return Date
                            </th>
                            <?php 
                            $res=mysqli_query($link, "SELECT * FROM CHECKOUT_STATUS AS C JOIN MEMBER AS M
                            ON C.MemID = M.id JOIN BOOK AS B ON C.CISBN = B.ISBN WHERE username = '$username'");
                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>"; echo $row["ISBN"]; echo "</td>";
                                echo "<td>"; echo $row["Title"]; echo "</td>";
                                echo "<td>"; echo $row["Checkout_date"]; echo "</td>";
                                echo "<td>"; echo $row["Due_date"]; echo "</td>";
                                echo "<td>"; echo $row["Return_date"]; echo "</td>";
                                echo "<tr>";
                             }



                            ?>

                        </table>
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