<?php

	$title = 'Dashboard';
	include_once('header.php');

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

    <?php  include_once('midel.php'); ?>

    <div class="side-bar ">
        <?php include('link.php'); ?>
    </div>

    <div class="row">
        <div class="column">
            <div class="card card1">
                <h2>Farmer</h2>
                <p><?php $conn = mysqli_connect('localhost','root','','test');
					 $sql = "select * from users where type ='farmer'";
					$result = mysqli_query($conn, $sql);

					$count = 0;

				    while ($row = mysqli_fetch_assoc($result)) {
						global $count;
						$count = $count+1;
					}

					echo $count;
					mysqli_close($conn);?></p>
            </div>
        </div>
        <div class="column">
            <div class="card card2">
                <h2>Buyer</h2>
                <p><?php $conn = mysqli_connect('localhost','root','','test');
					 $sql = "select * from users where type ='buyer'";
					$result = mysqli_query($conn, $sql);

					$count = 0;

				    while ($row = mysqli_fetch_assoc($result)) {
						global $count;
						$count = $count+1;
					}

					echo $count; mysqli_close($conn);?></p>
            </div>
        </div>
        <div class="column">
            <div class="card card3">
                <h2>Worker</h2>
                <p><?php $conn = mysqli_connect('localhost','root','','test');
					$sql = "select * from users where type ='worker'";
					$result = mysqli_query($conn, $sql);

					$count = 0;

				    while ($row = mysqli_fetch_assoc($result)) {
						global $count;
						$count = $count+1;
					}

					echo $count; 
					mysqli_close($conn);
					?></p>
            </div>
        </div>
    </div>

</body>

</html>