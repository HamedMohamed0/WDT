<?php 
session_start();

session_unset();
session_destroy();

header("Location: E-Learning/english/index.html");