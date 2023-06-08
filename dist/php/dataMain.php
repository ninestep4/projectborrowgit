<?php
date_default_timezone_set("Asia/Bangkok");

$siteTitle = 'ระบบจัดการข้อมูล';
$data_datetime = date('YmdHis');
$datavertion = '?v=' . $data_datetime;
if ($siteTitle != '') {
    $siteTitle = $page_title . ' | ' . $siteTitle;
}
