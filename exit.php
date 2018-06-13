<?php
session_start();
session_destroy();
unset($_SESSION['MynefritAdmin']);
require_once 'enter.php';