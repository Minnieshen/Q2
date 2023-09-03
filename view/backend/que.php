<Fieldset>
    <legend>新增問卷</legend>
    <form action="./api/add_que.php" method="post">
        <div style="display: flex;">
            <div class="clo">問卷名稱</div>
            <div><input type="text" name="subject" id="subject"> </div>
        </div>
        <div class="options">
            <div  style="padding: 0;">
                <label class="clo">選項</label>
                <input type="text" name="text[]" >
                <input type="button" onclick="more()" value="更多">
            </div>
        </div>
        
        <div class="ct">
            <input type="submit" value="新增"> |
            <input type="reset" value="清空">
        </div>
    </form>
</Fieldset>
<script>
function more() {
    let opt=`<div  style="padding: 0;">
                <label class="clo">選項</label>
                <input type="text" name="text[]">
            </div>`
    $('.options').append(opt)
}
</script>