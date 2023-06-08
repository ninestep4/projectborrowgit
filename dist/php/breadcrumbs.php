<?php

if ($page_befoe != '') {
    $bre = '<span class="text-muted fw-light">' . $page_befoe . ' /</span>';
}

echo '<h4 class="fw-bold py-3 mb-4">';
echo $bre . ' ' . $page_title;
echo '</h4>';
