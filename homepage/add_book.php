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
                        <h2>Add Book Info</h2>

                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <form name="form1" action="" method="post" class="col-lg-6" enctype="multipart/form-data">



        <table class= "table table-bordered">
            <tr>
                <td><input type="text" class="form-control" placeholder="ISBN" name= "isbn" required = ""></td>

            </tr>


            <tr>
                <td><input type="text" class="form-control" placeholder="Title" name= "title" required = ""></td>

            </tr>

            <tr>
                <td><input type="text" class="form-control" placeholder="Author" name= "author" required = ""></td>

            </tr>

            <tr>
                <td><input type="text" class="form-control" placeholder="Category" name= "category" required = ""></td>

            </tr>

            <tr>
                <td><input type="text" class="form-control" placeholder="Publisher" name= "publisher" required = ""></td>

            </tr>

            <tr>
                <td><input type="text" class="form-control" placeholder="Quantity" name= "quantity" required = ""></td>

            </tr>

            <tr>
                <td><input type="text" class="form-control" placeholder="Is available online?" name="available_online" required = ""></td>

            </tr>

            <tr>  
                <td><input type="submit" name="submit1" class="btn btn-default submit" value="Insert Books Details" style="font-size: 16px;  
                    font-weight: bold; color: black; width:100%;background-color: SteelBlue ;"></td>  
            </tr>  

        </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php  
if(isset($_POST["submit1"]))  { 

    $isbn = $_POST["isbn"];
    $title = $_POST["title"];
    $author = $_POST["author"];
    $category = $_POST["category"];
    $publisher = $_POST["publisher"];
    $quantity = $_POST["quantity"];
    $available_online = $_POST["available_online"];

    mysqli_query($link,"INSERT INTO BOOK (ISBN, Title, Author, Category, Publisher, Quantity, is_available_online) 
    VALUES ('$isbn', '$title', '$author', '$category', '$publisher', '$quantity', '$available_online')");

?>  

<script type="text/javascript">  
    alert("Books Inserted Successfully");  
</script>  
<?php  
}  
?>  
<?php
include "footer.php";
?>