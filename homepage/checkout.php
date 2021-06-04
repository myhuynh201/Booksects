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
                        <h2>Checkout Books</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">

                        <form name="form1" action="" method="post" >
                            <table>
                                <tr>
                                    <td>
                                        <select name="member" class="form-control selectpicker">
                                            <?php
                                            $res=mysqli_query($link, "SELECT id from MEMBER");
                                            while($row=mysqli_fetch_array($res)){
                                                echo "<option>";
                                                echo $row["id"];
                                                echo "</option>";
                                            }
                                            ?>
                                        </select>
                                    </td>
                                    <td>
                                        <input type="submit" value="search" name="submit1"
                                               class="form-control btn btn-default" style="margin-top: 5px;">
                                    </td>
                                </tr>
                            </table>

                        <?php
                        if(isset($_POST["submit1"])) {
                            $res5=mysqli_query($link, "SELECT * FROM MEMBER WHERE id='$_POST[member]'");
                            while($row5=mysqli_fetch_array($res5)) {
                                $memid = $row5["id"];
                                $firstname = $row5["FirstName"];
                                $lastname = $row5["LastName"];
                                $email = $row5["email"];
                            }

                        ?>
                        <table class= "table table-bordered">

                            <tr>
                                <td><input type="text" class="form-control" placeholder="Checkout#" name="checkoutID" required ></td>

                            </tr>

                            <tr>
                                <td>
                                    <input type="text" class="form-control" placeholder="MemberID" name= "id"
                                           value="<?php echo $memid; ?>" disabled>
                                </td>
                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" placeholder="First Name" name= "FirstName" 
                                           value="<?php echo $firstname; ?>" required></td>

                            </tr>
                            
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Last Name" name= "LastName" 
                                           value="<?php echo $lastname; ?>" required></td>

                            </tr>
                            
                            <tr>
                                <td><input type="text" class="form-control" placeholder="Email" name= "email" 
                                           value="<?php echo $email; ?>" required></td>

                            </tr>



                            <tr>
                                <td>
                                    <select name="CISBN" class="form-control selectpicker">
                                        <?php
                                            $res=mysqli_query($link, "SELECT ISBN FROM BOOK");
                                            while($row=mysqli_fetch_array($res)) {
                                                echo "<option>";
                                                echo $row["ISBN"];
                                                echo"</option>";

                                            }
                                        ?>
                                    </select>
                                </td>

                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" placeholder="Checkout Date" name= "Checkoutdate" 
                                           value="<?php echo date("yy/m/d"); ?>" required></td>

                            </tr>

                            <tr>
                                <td><input type="text" class="form-control" placeholder="Due Date" name="Duedate" required></td>

                            </tr>

                            <tr>
                                <td>
                                    <input type="submit" class="form-control" name="submit2"
                                           class="form-control btn btn-default" value="Checkout Book"
                                           style="background-color: SteelBlue; color: white">
                                </td>
                            </tr>

                        </table>


                        <?php
                        }
                        ?>
                        </form>

                        <?php
                        if(isset($_POST["submit2"])) {
                            mysqli_query($link, "INSERT INTO CHECKOUT_STATUS VALUES ('$_POST[checkoutID]', '$_POST[member]', 
                            '$_POST[CISBN]', '$_POST[Checkoutdate]', '$_POST[Duedate]', 'no', '')");



                            ?>
                            <script type="text/javascript">
                                alert("books checkout successfully");
                                window.location.href=window.location.href;
                            </script>
                        <?php
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