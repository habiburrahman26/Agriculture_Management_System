<?php

$title = 'Report';
include_once 'header.php';

?>

<body>
    <script>
    window.addEventListener('mouseup', function(e) {
        const menu = document.getElementById('menu');
        if (e.target != menu) {
            menu.style.display = 'none';
        }
    })
    </script>
    <?php

        require_once('../model/contact.php');

        $id = $_REQUEST['id'];

        $result = getMessagegById($id);

    ?>
    <div id="show-report">
        <div id="show-report-container">
            <span>Name:</span>
            <span><?php echo $result['name']; ?></span><br>
            <span>Message:</span><span><?php echo $result['message']; ?></span><br>
            <span>Status:</span><span><?php echo $result['status']; ?></span><br>
            <button id="delete-button" style="margin-top: 20px"><a
                    href="../controller/problemFixed.php?id=<?php echo $value['id']; ?>">Fixed</a></button>
        </div>

    </div>




</body>