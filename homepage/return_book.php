<?php
require_once "../config.php";
include "librarian_header.php";

?>

<!-- page content area main -->
<div class="right_col" role="main">
    <div class="">
        <div class="clearfix"></div>
        <div class="row" style="min-height:500px">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Return Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form name="form1" action="" method="post" >
                            <table class="table table-bordered">
                                <tr>
                                    <td>
                                        <select name="member" class="form-control">
                                            <?php
                                            $res=mysqli_query($link, "SELECT MemID FROM CHECKOUT_STATUS WHERE Return_date = ''");
                                            while($row=mysqli_fetch_array($res)) {
                                                echo "<option>";
                                                echo $row["MemID"];
                                                echo"</option>";

                                            }
                                            ?>

                                        </select>
                                    </td>
                                    <td>
                                        <input type="submit" class="form-control" name="submit1"
                                               value="search"
                                               style="background-color: SteelBlue; color: white">
                                    </td>
                                </tr>
                            </table>
                        </form>
                        <?php 
                            if(isset($_POST["submit1"])) {
                                $res=mysqli_query($link, "SELECT * FROM CHECKOUT_STATUS WHERE MemID = '$_POST[member]' and Return_date = ''");
                                echo "<table class='table table-bordered'>";
                                echo "<tr>";
                                echo "<th>"; echo"CheckoutID"; echo"</th>";
                                echo "<th>"; echo"MemberID"; echo"</th>";
                                echo "<th>"; echo"ISBN"; echo"</th>";
                                echo "<th>"; echo"Checkout Date"; echo"</th>";
                                echo "<th>"; echo"Due Date"; echo"</th>";
                                echo "<th>"; echo"Return Books"; echo"</th>";
                                echo "</tr>";

                                echo "</tr>";
                                while($row=mysqli_fetch_array($res)) {
                                    echo "<tr>";
                                    echo "<td>"; echo $row["CheckNo"]; echo "</td>";
                                    echo "<td>"; echo $row["MemID"]; echo "</td>";
                                    echo "<td>"; echo $row["CISBN"]; echo "</td>";
                                    echo "<td>"; echo $row["Checkout_date"]; echo "</td>";
                                    echo "<td>"; echo $row["Due_date"]; echo "</td>";
                                    
                                    $checkno= $row['CheckNo'];
                                    echo "<td>"; ?> <a href="return.php?id=<?php echo $checkno; ?>">Return Books</a> <?php echo "</td>";
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