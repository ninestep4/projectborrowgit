<?php
include 'dist.php';
echo '<!DOCTYPE html>';
echo '<html lang="en">';

echo '<head>';
include $path . 'dist/php/meta.php';
echo '<title>' . $siteTitle . '</title>';
include $path . 'dist/php/files_css.php';

echo '</head>';
echo '<body class="layout-wrapper layout-content-navbar">';
echo ' <div class="layout-container">';
include $path . 'dist/menu/menu.php';
echo '<div class="content-wrapper">';
echo '<div class="container-fluid flex-grow-1 container-p-y">';

