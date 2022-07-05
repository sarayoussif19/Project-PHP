<?php
session_start();
session_destroy();
// Redirect to the login page:
header('Location: screen1.php');
