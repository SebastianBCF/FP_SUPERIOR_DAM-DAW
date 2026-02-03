<?php
session_start();
session_destroy();
header("Location: Roles.php");
exit();
