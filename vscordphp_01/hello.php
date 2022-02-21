<?php
date_default_timezone_set('Asia/Tokyo');
$d = getdate();
$h = $d["hours"];

if ($h < 6 && $h > 12)
{
    $msg = "Good morning!, ";
    header("Location:https://www.yahoo.co.jp/");
}
elseif ($h >= 12 && $h <= 18)
{
    $msg = "Gaood afternoon!, ";
    header("Location:https://www.yahoo.co.jp/");
}
elseif ($h >= 19 && $h <= 22)
{
    $msg = "Good evening!, ";
}
else
{
    $msg = "Good night!, ";
}


print($msg . $_POST["whom"]);





