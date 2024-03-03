<?php
session_start();
echo "You are looged out.";


session_destroy(); 
header("location: /forum");
?>
