<?php
session_start();
session_destroy();
header("location:../Webpages/login.php");
