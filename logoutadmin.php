<!-- Limelight Cinema 2021-2022
Violeta Lazarova - ec1929702
This is page to end session when you logout and send you back to the index page  -->
<?php
session_start();
session_destroy();
header('Location: adminlogin.html');
exit;
?>

