<fieldset>
    <legend>帳號管理</legend>
    <form action="./api/user_admin.php" method="post">
    <table class="ct" style="width: 50%;margin:auto">
        <tr>
            <td class="clo">帳號</td>
            <td class="clo">密碼</td>
            <td class="clo">刪除</td>
        </tr>
        <?php
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><?=$row['acc'];?></td>
                <td><?=str_repeat('*', strlen($row['pw']));?></td>
                <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
            </tr>
        <?php
        }
        ?>
    </table>
    <div class="ct">
        <input type="submit" value="確定刪除">
        <input type="reset" value="清空選取">
    </div>
    </form>
    <h1>新增會員</h1>
    <div style="color:red ">
        *請設定您要註冊的帳號及密碼(最長12個字元)
    </div>
    <table>
        <tr>
            <td class="clo">Step1:登入帳號</td>
            <td><input type="text" id="acc" name="acc"></td>
        </tr>
        <tr>
            <td class="clo">Step2:登入密碼</td>
            <td><input type="password" id="pw" name="pw"></td>
        </tr>
        <tr>
            <td class="clo">Step3:再次確認密碼</td>
            <td><input type="password" id="pw2" name="pw2"></td>
        </tr>
        <tr>
            <td class="clo">Step4:信箱(忘記密碼時使用)</td>
            <td><input type="text" id="email" name="email"></td>
        </tr>
        <tr>
            <td>
                <input type="button" onclick="reg()" value="新增">
                <input type="button" onclick="clean()" value="清除">
            </td>
        </tr>
    </table>
</fieldset>
<script>
    function reg() {
        info = {
            acc: $('#acc').val(),
            pw: $('#pw').val(),
            pw2: $('#pw2').val(),
            email: $('#email').val(),
        }

        if (info.acc == "" || info.pw == "" || info.pw2 == "" || info.email == "") {
            alert("不可空白");
        } else if (info.pw != info.pw2) {
            alert("密碼錯誤")
        } else {
            // console.log("傳過去acc: info.acc的資料","acc: info.acc");
            $.post("./api/chk_acc.php", {acc: info.acc}, (res) => {
                
                if (parseInt(res) !== 0) {
                    alert("帳號重複");
                } else {
                    $.post("./api/reg.php", info, () => {
                        // alert("註冊完成，歡迎加入");
                        location.reload();
                    })
                }
            })
        }
    }


    function clean() {
        $("input[type='text'],input[type='password'],input[type='number'],input[type='radio'],input[type='email'],input[type='checkbox']").val("");
    }
</script>