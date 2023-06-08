<?php

//include '../dist/php/files_getdata_login.php';

$case = $_POST['case'];
if ($case == 1) {
    include 'function.php';
    $getdata = new getdata();
    $data = $getdata->login($_POST);
    echo json_encode($data);
}
