<?php
session_start();
unset($_SESSION['user']); // Unset the specific variable
session_destroy();
header('location: index.php');
