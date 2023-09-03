<?php
$subject = $Que->subject($_GET['id']);
?>
<fieldset>
    <legend>目前位置:首頁>問卷調查> <?= $subject['text']; ?></legend>
    <h3><?= $subject['text']; ?></h3>
    <?php
    foreach ($subject['options'] as $key => $value) {
        $total = ($subject['vote'] == 0) ? 1 : $subject['vote'];
        $rate = ($value['vote'] / $total);
    ?>
        <p>
        <div style="display: flex;align-items:center">
            <div style="width:40%;"><?= ($key + 1) . "." . $value['text']; ?></div>
            <div style="width:<?= (40 * $rate); ?>% ;background:#aaa;height:32px"></div>
            <div style="width:20%;"><?= $value['vote'];?>票(<?= round($rate * 100);?>%)</div>       
        </div>
        </p>
    <?php
    }
    ?>
    <div class="ct"><input type="submit" onclick="location.href='?do=que'" value="返回"></div>
    </fieldset>