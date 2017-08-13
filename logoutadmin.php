<?php
require 'sessionadmin.php';
session_destroy();
header('Location: koyomoldadmin.php');
?>