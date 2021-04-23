han//addcategory yyy u
<?php

$title = "Add Product Category";
include 'header.php';
?>

<table border="1" align="center" width="100%">
    <tr height="100px">
        <td width="100px"><img src="../assets/002-planting.png" width="150px" height="70px"></td>
        <td align="right">
            Logged in as <?php echo $_COOKIE['username'] ?> |
            <a href="../controller/logout.php">Logout</a>
        </td>
    </tr>
    <tr height="400px">
        <td width="300px">
            <ul>
                <?php include 'link.php';?>
            </ul>
        </td>
        <td>
            <form method="post" action="../controller/categoryCheck.php">
                <fieldset>
                    <legend>Add Product Category</legend>
                    <table>
                        <tr>
                            <td>Category Name: <input type="text" name="category" value="" required=""></td>
                            <td><input type="submit" name="submit" value="Add"></td>
                        </tr>
                    </table>
                </fieldset>
            </form>
        </td>
    </tr>
    <tr height="50px">
        <td colspan="3" align="center">
            copyright@2021
        </td>
    </tr>
</table>
</body>

</html>