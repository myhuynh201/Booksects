<?php
require_once "../config.php";
include "student_header.php";

?>

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Home</h3>
            </div>
        </div>

        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Display Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form name="form1" action="" method="post" >
                            <input type="text" name="t1" class="form-control" placeholder="enter books name">
                            <input type="submit" name="submit1" value="search books" class="btn btn-default">

                        </form>
                        <?php
                        if(isset($_POST["submit1"])){
                            $title = $_POST['t1'];
                            $res = mysqli_query($link, "SELECT * FROM BOOK WHERE Title LIKE '$title%'");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>"; echo "ISBN"; echo "</th>";
                            echo "<th>"; echo "Title"; echo "</th>";
                            echo "<th>"; echo "Author"; echo "</th>";
                            echo "<th>"; echo "Category"; echo "</th>";
                            echo "<th>"; echo "Publisher"; echo "</th>";
                            echo "<th>"; echo "Quantity"; echo "</th>";
                            echo "<th>"; echo "Available online?"; echo "</th>";
                            echo "</tr>";

                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>"; echo $row["ISBN"]; echo "</td>";
                                echo "<td>"; echo $row["Title"]; echo "</td>";
                                echo "<td>"; echo $row["Author"]; echo "</td>";
                                echo "<td>"; echo $row["Category"]; echo "</td>";
                                echo "<td>"; echo $row["Publisher"]; echo "</td>";
                                echo "<td>"; echo $row["Quantity"]; echo "</td>";
                                echo "<td>"; echo $row["is_available_online"]; echo "</td>";
                                echo "</tr>";
                            }
                            echo "</table>";

                        }else {

                            $res = mysqli_query($link, "SELECT * FROM BOOK");
                            echo "<table class='table table-bordered'>";
                            echo "<tr>";
                            echo "<th>"; echo "ISBN"; echo "</th>";
                            echo "<th>"; echo "Title"; echo "</th>";
                            echo "<th>"; echo "Author"; echo "</th>";
                            echo "<th>"; echo "Category"; echo "</th>";
                            echo "<th>"; echo "Publisher"; echo "</th>";
                            echo "<th>"; echo "Quantity"; echo "</th>";
                            echo "<th>"; echo "Available online?"; echo "</th>";
                            echo "</tr>";

                            while ($row = mysqli_fetch_array($res)) {
                                echo "<tr>";
                                echo "<td>"; echo $row["ISBN"]; echo "</td>";
                                echo "<td>"; echo $row["Title"]; echo "</td>";
                                echo "<td>"; echo $row["Author"]; echo "</td>";
                                echo "<td>"; echo $row["Category"]; echo "</td>";
                                echo "<td>"; echo $row["Publisher"]; echo "</td>";
                                echo "<td>"; echo $row["Quantity"]; echo "</td>";
                                echo "<td>"; echo $row["is_available_online"]; echo "</td>";
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