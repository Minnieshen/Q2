<?php
include_once "../base.php";

// if(isset($_POST['del'])){
//  foreach ($_POST['del'] as $id) {
//     $User->del($id);
//  }
// }


if(isset($_POST['del'])){
    foreach ($_POST['del'] as $key => $value) {
        $User->del($value);
    }
   }



to("../backend.php?do=user");


?>