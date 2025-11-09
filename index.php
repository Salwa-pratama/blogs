<?php
$page = $_GET['page'] ?? 'home';

$file = "views/pages/$page.php";

if (!file_exists($file)) {
    $file = "views/pages/error/404.php";
}


ob_start();
include $file;
$content = ob_get_clean();
include __DIR__ . "/views/templates/Layouts.php"
?>
