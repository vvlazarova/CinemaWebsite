<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is Logout script that takes you to the landing page -->


<?php
session_start();
session_destroy();
header('Location: index.php');
exit;
?>

