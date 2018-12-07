<?php
@session_start();
@session_destroy();

header("Location: http://192.168.56.101/source");
?>