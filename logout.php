<?php
require 'connect.php';
session_destroy();
session_unset();
header('location:homepage.php');
?>