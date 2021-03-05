
<?php
require __DIR__ . "../database/db.php";
session_start();
session_unset();
session_destroy();
header('location:index.php');
?>
