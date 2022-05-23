<?php
session_start();
if (isset($_SESSION['favcolor'])) {
    header("Location: login.php");
}
