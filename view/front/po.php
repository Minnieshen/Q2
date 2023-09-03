<div>
    目前位置：首頁>分類網誌><span id="header">健康新知</span>
</div>
<div style="display: flex;">
    <Fieldset style="width: 150px;">
        <legend>分類網誌</legend>
        <div><a class="cat" data-type="1" href="#">健康新知</a></div>
        <div><a class="cat" data-type="2" href="#">菸害防治</a></div>
        <div><a class="cat" data-type="3" href="#">癌症防治</a></div>
        <div><a class="cat" data-type="4" href="#">慢性病防治</a></div>
    </Fieldset>
    <Fieldset style="width: 550px" ;>
        <legend>文章列表</legend>
        <div id="lists"></div>
        <div id="post"></div>
    </Fieldset>
</div>
<script>
    $('.cat').on('click', function() {
        $('#header').text($(this).text());
    })

    $('.cat').on('click', function() {
        console.log($(this).attr('data-type'));
        $.post('./api/got-list.php',{type:$(this).attr('data-type')},(type)=>{        
         $('#post').html(type)
        }) ;
    })

    function getPost(id){
        $.post('./api/got-post.php',{id},(type)=>{        
         $('#post').html(type)
        }) ;

    }

</script>