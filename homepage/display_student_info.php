<?php
include "librarian_header.php";
require_once "../config.php";
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
                        <h2>Student Information</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form name="form1" action="" method="post" >
                            <input type="text" name="lastname" class="form-control" placeholder="Search for student last name">
                            <input type="submit" name="submit1" value="search last name" class="btn btn-default">

                        </form>
                        <?php 
                        if(isset($_POST["submit1"])){
                            $lastname = $_POST['lastname'];
                            $res=mysqli_query($link, "SELECT * FROM MEMBER WHERE user_type = 'student' and LastName LIKE '%$lastname%'");
                            echo "<table class = 'table table-bordered'>";
                            echo "<tr>";
                            echo "<th>"; echo "MemberID"; echo "</th>";
                            echo "<th>"; echo "Last Name"; echo "</th>";
                            echo "<th>"; echo "First Name"; echo "</th>";
                            echo "<th>"; echo "Address"; echo "</th>";
                            echo "<th>"; echo "Phone"; echo "</th>";
                            echo "<th>"; echo "Email"; echo "</th>";
                            echo "</tr>";

                            while($row=mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>"; echo $row["id"]; echo "</td>";
                                echo "<td>"; echo $row["LastName"]; echo "</td>";
                                echo "<td>"; echo $row["FirstName"]; echo "</td>";
                                echo "<td>"; echo $row["address"]; echo "</td>";
                                echo "<td>"; echo $row["phone"]; echo "</td>";
                                echo "<td>"; echo $row["email"]; echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        } else {

                            $res=mysqli_query($link, "SELECT * FROM MEMBER WHERE user_type = 'student'");
                            echo "<table class = 'table table-bordered'>";
                            echo "<tr>";
                            echo "<th>"; echo "MemberID"; echo "</th>";
                            echo "<th>"; echo "Last Name"; echo "</th>";
                            echo "<th>"; echo "First Name"; echo "</th>";
                            echo "<th>"; echo "Address"; echo "</th>";
                            echo "<th>"; echo "Phone"; echo "</th>";
                            echo "<th>"; echo "Email"; echo "</th>";
                            echo "</tr>";

                            while($row=mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>"; echo $row["id"]; echo "</td>";
                                echo "<td>"; echo $row["LastName"]; echo "</td>";
                                echo "<td>"; echo $row["FirstName"]; echo "</td>";
                                echo "<td>"; echo $row["address"]; echo "</td>";
                                echo "<td>"; echo $row["phone"]; echo "</td>";
                                echo "<td>"; echo $row["email"]; echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";
                        }
                        ?>

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