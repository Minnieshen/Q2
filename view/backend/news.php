<form action="./api/news_admin.php" method="post">
    <table class="ct" style="width: 75%;margin:auto">
        <tr>
            <td class="clo">編號</td>
            <td class="clo">標題</td>
            <td class="clo">顯示</td>
            <td class="clo">刪除</td>
        </tr>
        <?php
        // foreach ($rows as $key => $row) {
        foreach ($rows as $key => $row) {
        ?>
            <tr>
                <td><?= $start + $key; ?></td>
                <td><?= $row['title']; ?></td>
                <td><input type="checkbox" name="sh[]" value="<?= $row['id']; ?>"<?= $row['sh'] == 1 ? "checked" : ""; ?>></td>                              
                <td><input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                <td><input type="hidden" name="id[]" value="<?= $row['id']; ?>" <?= $row['sh'] == 1 ? "checked" : ""; ?>></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="ct"><?= $links; ?></div>
    <div class="ct"><input type="submit" value="確定修改"></div>
</form>