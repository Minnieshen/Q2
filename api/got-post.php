<?php
include_once "../base.php";

$news=$News->find($_POST['id']);
// dd($news);
echo "<div>";
echo "<pre>";
echo  $news['text'];
echo "</pre>";
echo "</div>";

?>
