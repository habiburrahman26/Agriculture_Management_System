<?php

setcookie( 'status', 'false', time() - 3600, '/' );
header( 'location:../view/home.html' );

?>