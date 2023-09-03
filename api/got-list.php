<?php
include_once "../base.php";

$artcle=$News->all(['type'=>$_POST['type']]);

 foreach($artcle as $key=>$val){
   //   dd($val);
    echo '<div>';
    echo "<a href='Javascript:getPost({$val['id']})'> {$val['title']} </a>";
    echo '</div>';
 }

?>
