<?php

unset($_SESSION["cart"]);
session_destroy();
header("location: index.php");


?>