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
        session_start();
        if (isset($_SESSION['message'])) {?>
    <div
        style="margin-left: 250px; margin-top: 70px;margin-bottom: -70px; background-color: #81D89C;color: #ffffff; padding: 20px; font-size: 1.2rem; width: 84%">
        <?php   echo $_SESSION['message'];
                unset($_SESSION['message']);?>
    </div>
    <?php
        }
    ?>

    <?php include_once 'midel.php';?>

    <div class="side-bar ">
    <?php include 'link.php';?>
    </div>

    <div class="show-table">
        <table>
            <tr>
                <th>Name</th>
                <th>Message</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
            <?php
            require_once ('../model/contact.php');
            $contact = getContact();

			foreach ($contact as  $value) { echo "<tr>"; ?>

            <td><?php echo $value['name']; ?></td>
            <td><?php echo $value['message']; ?></td>
            <td><?php echo $value['status']; ?></td>

            <td>
            <button id="edit-button"><a
                    href="../controller/problemFixed.php?id=<?php echo $value['id']; ?>">Fixed</a></button>
            </td>

            <?php echo "</tr>"; } ?>
        </table>
    </div>




</body>