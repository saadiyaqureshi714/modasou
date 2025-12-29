<?php
session_start();

if (!isset($_SESSION['order_id'])) {
    $_SESSION['order_id'] = "MODA-" . date("Ymd") . "-" . rand(1000,9999);
}
?>
