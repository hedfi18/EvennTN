<?php
include 'D:\xampp\htdocs\web1\test\View\Backend\blogController.php';
require_once 'D:\xampp\htdocs\web1\test\View\Backend\blog1.php';
$blogC=new blogC();
$blogC->supprimerblog($_GET["id"]);
header('Location:tab-blog.php');
?>
