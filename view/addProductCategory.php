<?php

$title = 'Add Product Category';
include_once 'header.php';

?>

<body>

    <?php include_once 'midel.php';?>

    <div class="side-bar ">
        <?php include_once 'link.php';?>
    </div>

    <div id="msg" style="display: none;"></div>
    <div class="row-right-product">
        <h1 id="product">Add Product Category</h1>
        <form method="POST" onsubmit="return productValidation()">
            <label>Category Name</label><br>
            <input id="name" type="text" name="category"><br>
            <label id="lproduct" style="color: red;font-size: .8rem;"></label><br>
            <input id="add_button" type="submit" name="submit" value="Add">
        </form>
    </div>

    <script>
    window.addEventListener('mouseup', function(e) {
        const menu = document.getElementById('menu');
        if (e.target != menu) {
            menu.style.display = 'none';
        }
    });
    </script>
</body>

</html>