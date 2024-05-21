<?php
require_once("../login/connect.php");
session_start();
session_destroy();

header("Location: ../login/login.php");
exit();
?>