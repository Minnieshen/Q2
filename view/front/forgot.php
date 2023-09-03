 請輸入信箱以查詢密碼<br>
<input type="email" id="email" name="email"><br>
<div id="res"></div>
<button onclick="find()">尋找</button>

<script>
function find(){
    $.get('./api/find.php',{email:$('#email').val()},(res)=>{
        $('#res').text(res);
    })
}
</script>
