<?php
$TopDir = substr( home_url(), 0, strrpos( home_url(), '/')+1);

$PageTitle = (is_single()) ? get_the_title() : "Blog";

include "../header.php";
?>
