<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <script src="js/jquery1-8-0.js"></script>
</head>
<body>
<div align="center">
    <table border="1">
        <tr>
            <th style="width: 100px">留言人</th>
            <th style="width: 200px">留言内容</th>
            <th style="width: 100px">留言时间</th>
            <th style="width: 100px">操作</th>
        </tr>


        <?php
        use yii\widgets\LinkPager;
        foreach ($models as $model) {
            // 在这里显示 $model
            ?>
            <tr>
                <td><?php echo $model['lname'];?></td>
                <td><?php echo $model['content']; ?></td>
                <td><?php echo $model['ltime']; ?></td>
                <td><a href="javascript:void(0)" class="delete" onclick="fun(<?php echo $model['id']; ?>);">删除</a>   <a href="javascript:void(0)" class="update">修改</a></td>
            </tr>
            <?php
        }
        ?>
    </table>

    <? echo  LinkPager::widget(
        array(
            'pagination' => $pages,
            'firstPageLabel' => '首页',
            'nextPageLabel' => '下一页',
            'prevPageLabel' => '上一页',
            'lastPageLabel' => '末页',
        )

    );?>
    <input type="button" value="去留言" class="submit">
</div>
</body>
</html>
<script type="text/javascript">
    $(document).ready(function(){
        $(".update").on("click",function(){
            alert(1)
        })
    })
    function fun(id){
        var ajax = new XMLHttpRequest();
        ajax.onreadystatechange=function(){
            if (ajax.readyState==4)
            {
                //接收数据
                alert("删除成功");
                document.getElementById("ti").innerHTML = ajax.responseText;
            }
        }
        ajax.open("get","index.php?r=index/delete"+"&id="+id);
        ajax.send(null);
    }
</script>
